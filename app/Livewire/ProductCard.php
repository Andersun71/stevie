<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\User;
use Livewire\Attributes\on;

class ProductCard extends Component
{
    public $products;
    public $type = 'goods';
    public $search = '';

    protected $queryString = ['search' => ['except' => '']];

    #[On('search-product')]
    public function updateSearch($search)
    {
        $this->search = $search;
    }

    public function mount()
    {
        $this->loadProducts();
    }

    protected function loadProducts()
    {
        $query = Product::where('type', $this->type);

        if ($this->search) {
            $query->where(function($q) {
                $q->where('name', 'like', '%' . $this->search . '%')
                  ->orWhere('title', 'like', '%' . $this->search . '%');
            });
        }

        $this->products = $query->with('user')->get();
    }
    public function render()
    {
        return view('livewire.product-card', [
            "products" => $this->products,
            "type" => $this->type
        ]);
    }
}
