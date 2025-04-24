<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\User;

class ProductCard extends Component
{
    public $products;
    public $type = 'goods';

    public function mount()
    {
        $this->products = Product::where('type', $this->type)->with('user')->get();
    }
    public function render()
    {
        return view('livewire.product-card', [
            "products" => $this->products,
            "type" => $this->type
        ]);
    }
}
