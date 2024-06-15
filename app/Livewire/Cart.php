<?php

namespace App\Livewire;

use Livewire\Component;

class Cart extends Component
{
    public $cart;

    public function mount()
    {
        $this->cart = session()->get('cart', []);
    }

    public function addToCart($productId)
    {
        $this->cart[$productId] = isset($this->cart[$productId]) ? $this->cart[$productId] + 1 : 1;
        session()->put('cart', $this->cart);
    }

    public function removeFromCart($productId)
    {
        if (isset($this->cart[$productId])) {
            unset($this->cart[$productId]);
            session()->put('cart', $this->cart);
        }
    }

    public function hasInCart($productId)
    {
        return isset($this->cart[$productId]);
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
