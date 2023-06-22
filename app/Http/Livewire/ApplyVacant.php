<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Notifications\NewCandidate;

class ApplyVacant extends Component
{
	use WithFileUploads;

	public $cv;
	public $vacant;

	protected $rules = [
		'cv' => 'required|mimes:pdf',
	];

	public function mount($vacant)
	{
		$this->vacant = $vacant;
	}

	public function apply()
	{
		$data = $this->validate();
		$cvFullPath = $this->cv->store(ApplyVacant::$storePath);
		$data['cv'] = str_replace(ApplyVacant::$storePath . '/', '', $cvFullPath);
		$this->vacant->candidates()->create([
			'user_id' => auth()->user()->id,
			'cv' => $data['cv']
		]);

		$this->vacant->recruiter->notify(new NewCandidate([
			'vacant_id' => $this->vacant->id,
			'user_id' => auth()->user()->id,
			'title' => $this->vacant->title
		]));

		session()->flash('success', __('vacancies.apply_to_vacant_success'));
		return redirect()->back();
	}

	public function render()
	{
		return view('livewire.apply-vacant');
	}

	public static string $storePath = 'public/cv';
}
