<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class DetailProduct extends Component
{
    public $product;
    public $categories = [];

    public function mount($id)
    {
        $this->product = Product::with(['user','categories'])->findOrFail($id);
        $this->categories = $this->product->categories;
    }
    public function render()
    {
        return view('livewire.detail-product');
    }
}
