<?php

namespace App\Livewire;

use Livewire\Component;

class Cart extends Component
{
    public $cart = [];
    public $product;

    public function mount()
    {
        $this->cart = session()->get('cart', []);
    }

    public function addToCart($productId)
    {
        $this->cart[$productId] = isset($this->cart[$productId]) ? $this->cart[$productId] + 1 : 1;
        session()->put('cart', $this->cart);
    }
    public function render()
    {
        return view('livewire.cart');
    }
}
