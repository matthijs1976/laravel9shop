<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class CartComponent extends Component
{
    public function incQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId,$qty);
    }

    public function decQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId,$qty);
    }

    public function destroy($id)
    {
        Cart::remove($id);
        session()->flash('success_message','Product Is Verwijderd');
    }

    public function clearAll()
    {
        Cart::destroy();
    }

    public function render()
    {
        return view('livewire.cart-component');
    }
}
