<?php

namespace App\Http\Livewire;

use App\Models\Vacant;
use Livewire\Component;

class HomeVacancies extends Component
{
    protected $listeners = ['readFormDataExecuted' => 'search'];

    public $searchTerm;
    public $category;
    public $salary;

    public function search($searchTerm, $category, $salary)
    {
        $this->searchTerm = $searchTerm;
        $this->category = $category;
        $this->salary = $salary;
    }

    public function render()
    {
        $vacancies = Vacant::when($this->searchTerm, function ($query, $searchTerm) {
            $query->where('title', 'like', '%' . $searchTerm . '%');
        })->when($this->category, function ($query, $category) {
            $query->where('category_id', $category);
        })->when($this->salary, function ($query, $salary) {
            $query->where('salary_id', $salary);
        })->latest()->paginate(10);
        return view('livewire.home-vacancies', compact('vacancies'));
    }
}
