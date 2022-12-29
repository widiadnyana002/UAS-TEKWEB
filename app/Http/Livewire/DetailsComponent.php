<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Cart;
use Illuminate\Support\Facades\Auth;

class DetailsComponent extends Component
{
    public $slug;

    public function mount($slug){
        $this->slug = $slug;
    }

    public function store($product_id, $product_name, $product_price)
    {
        if (Auth::check()) {
            Cart::add($product_id, $product_name, 1, $product_price)->associate('\App\Models\Product');
            session()->flash('success_message', 'Item added in Cart');
            return redirect()->route('shop.cart');
        } else {
            return redirect()->route('login');
        }
    }

    public function render()
    {
        $product = Product::where('slug', $this->slug)->first();
        return view('livewire.details-component', ['product'=>$product]);
    }
}
