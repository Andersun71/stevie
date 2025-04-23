<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ServiceCard extends Component
{
    public $services;

    public function mount()
    {
        $this->services = Product::where('type', 'services')->get();
    }
    public function render()
    {
        return view('livewire.service-card', [
            "services" => $this->services
        ]);
    }
}
