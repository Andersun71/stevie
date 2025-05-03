<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class ProductCard extends Component
{
    use WithPagination;
    
    public $type = 'goods';
    public $search = '';

    protected $queryString = ['search' => ['except' => '']];

    #[On('search-product')]
    public function updateSearch($search)
    {
        $this->search = $search;
        $this->resetPage();
    }

    public function render()
    {
        $query = Product::where('type', $this->type);

        if ($this->search) {
            $query->where(function($q) {
                $q->where('title', 'like', '%' . $this->search . '%')
                  ->orWhere('description', 'like', '%' . $this->search . '%');
            });
        }

        $products = $query->with('user')->latest()->paginate(9);

        return view('livewire.product-card', [
            "products" => $products,
            "type" => $this->type
        ]);
    }
}