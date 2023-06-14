<?php

namespace App\Http\Livewire;

use App\Models\Vacant;
use Livewire\Component;

class ListVacancies extends Component
{
    public function render()
    {
        $perPage = (int) env('PAGINATION_PER_PAGE', 10);

        $vacancies = Vacant::where('user_id', auth()->user()->id)->paginate($perPage);
        return view('livewire.list-vacancies', [
            'vacancies' => $vacancies,
        ]);
    }
}
