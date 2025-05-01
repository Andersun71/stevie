<?php

namespace App\Livewire;

use Livewire\Component;

class SearchProduct extends Component
{
    public $search = "";

    public function updatedSearch()
    {
        $this->dispatch('search-product', search: $this->search);
    }
    
    public function render()
    {
        return view('livewire.search-product');
    }
}