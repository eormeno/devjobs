<?php

namespace App\Http\Livewire;

use App\Models\Salary;
use Livewire\Component;
use App\Models\Category;

class CreateVacant extends Component
{
    public function render()
    {
        return view('livewire.create-vacant', [
            'salaries' => Salary::all(),
            'categories' => Category::all(),
        ]);
    }
}
