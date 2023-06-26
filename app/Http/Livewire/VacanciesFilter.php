<?php

namespace App\Http\Livewire;

use App\Models\Salary;
use Livewire\Component;
use App\Models\Category;

class VacanciesFilter extends Component
{
    public $salary;
    public $category;
    public $searchTerm;

    public function readFormData() {
        $this->emit('readFormDataExecuted', $this->searchTerm, $this->category, $this->salary);
    }

    public function render()
    {
        $salaries = Salary::all();
        $categories = Category::all();
        
        return view('livewire.vacancies-filter', [
            'salaries' => $salaries,
            'categories' => $categories,
        ]);
    }
}
