<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class CheckoutComponent extends Component
{
    public function render()
    {
        $product = Product::all();
        return view('livewire.checkout-component', ['product'=>$product]);
    }
}
