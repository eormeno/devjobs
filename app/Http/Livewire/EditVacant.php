<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Salary;
use App\Models\Vacant;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;

class EditVacant extends Component
{
	public $vacant_id;
	public $title;
	public $category;
	public $company;
	public $salary;
	public $job_description;
	public $apply_deadline;
	public $image;
	public $new_image;

	use WithFileUploads;

	protected $rules = [
		'title' => 'required|min:3',
		'salary' => 'required',
		'category' => 'required',
		'company' => 'required',
		'apply_deadline' => 'required',
		'job_description' => 'required',
		'new_image' => 'nullable|image|max:1024',
	];

	public function mount(Vacant $vacant)
	{
		$this->vacant_id = $vacant->id;
		$this->title = $vacant->title;
		$this->category = $vacant->category_id;
		$this->company = $vacant->company;
		$this->salary = $vacant->salary_id;
		$this->job_description = $vacant->job_description;
		$this->apply_deadline = Carbon::parse($vacant->apply_deadline)->format('Y-m-d');
		$this->image = $vacant->image;
	}

	public function editVacant()
	{
		$datos = $this->validate();

		$vacant = Vacant::find($this->vacant_id);

		if ($this->new_image) {
			$imageFullPath = $this->new_image->store(CreateVacant::$storePath);
			$datos['image'] = str_replace(CreateVacant::$storePath . '/', '', $imageFullPath);
		} else {
			$datos['image'] = $this->image;
		}

		$vacant->title = $datos['title'];
		$vacant->company = $datos['company'];
		$vacant->apply_deadline = $datos['apply_deadline'];
		$vacant->category_id = $datos['category'];
		$vacant->salary_id = $datos['salary'];
		$vacant->job_description = $datos['job_description'];
		$vacant->image = $datos['image'];

		$vacant->save();

		session()->flash('message', __('vacancies.form_success_edit'));

		return redirect()->route('vacancies.index');
	}

	public function render()
	{
		return view('livewire.edit-vacant', [
			'salaries' => Salary::all(),
			'categories' => Category::all(),
		]);
	}
}
