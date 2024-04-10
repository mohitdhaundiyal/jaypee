<?php

namespace App\Livewire;

use App\Models\Faculty;
use Livewire\Component;

class Search extends Component
{
    public $search = '';

    public function render()
    {
        $results = Faculty::all();

        if (strlen($this->search) >= 3) {
            $results = Faculty::where('name', 'like', '%' . $this->search . '%')->get();
        }

        return view('livewire.search', [
            'faculties' => $results,
        ]);
    }
}
