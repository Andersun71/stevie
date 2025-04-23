<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductCard extends Component
{
    public $products;

    public function mount()
    {
        $this->products = Product::where('type', 'goods')->get();
    }
    public function render()
    {
        return view('livewire.product-card', [
            "products" => $this->products
        ]);
    }
}
