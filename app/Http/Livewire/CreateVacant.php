<?php

namespace App\Http\Livewire;

use App\Models\Salary;
use Livewire\Component;
use App\Models\Category;
use App\Models\Vacant;
use Livewire\WithFileUploads;

class CreateVacant extends Component
{
	public $title;
	public $salary;
	public $category;
	public $company;
	public $apply_deadline;
	public $job_description;
	public $image;

	use WithFileUploads;

	protected $rules = [
		'title' => 'required|min:3',
		'salary' => 'required',
		'category' => 'required',
		'company' => 'required',
		'apply_deadline' => 'required',
		'job_description' => 'required',
		'image' => 'required|image',
	];

	public function createVacant()
	{
		$data = $this->validate();
		$imageFullPath = $this->image->store(CreateVacant::$storePath);
		$data['image'] = str_replace(CreateVacant::$storePath . '/', '', $imageFullPath);

		Vacant::create([
			'title' => $data['title'],
			'salary_id' => $data['salary'],
			'category_id' => $data['category'],
			'company' => $data['company'],
			'apply_deadline' => $data['apply_deadline'],
			'job_description' => $data['job_description'],
			'image' => $data['image'],
			'user_id' => auth()->user()->id,
		]);

		session()->flash('message', __('vacancies.form_success'));

		return redirect()->route('vacancies.index');
	}

	public function render()
	{
		return view('livewire.create-vacant', [
			'salaries' => Salary::all(),
			'categories' => Category::all(),
		]);
	}

	public static string $storePath = 'public/images/vacants';
}
