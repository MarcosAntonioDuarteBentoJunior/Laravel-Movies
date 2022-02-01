<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchDropdown extends Component
{
    
    public $search = '';

    public function render()
    {
        $searchResults = [];

        if(strlen($this->search) >= 2){
            $searchResults = Http::get('https://api.themoviedb.org/3/search/multi?api_key=e001757e234389b60534a5b1f09a7b73&language=pt-BR&query=' . $this->search)
            ->json()['results'];
        }
        
        return view('livewire.search-dropdown', [
            'searchResults' => collect($searchResults)->take(7)
        ]);
    }
}
