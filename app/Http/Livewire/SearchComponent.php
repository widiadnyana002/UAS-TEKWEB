<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use Cart;
use Illuminate\Support\Facades\Auth;

class SearchComponent extends Component
{
    use WithPagination;
    public $pageSize = 12;
    public $orderBy = "Default Sorting";

    public $q;
    public $search_term;

    public function mount(){
        $this->fill(request()->only('q'));
        $this->search_term = '%'.$this->q. '%';

    }

    public function store($product_id, $product_name, $product_price)
    {
        if (Auth::check()) {
            Cart::add($product_id, $product_name, 1, $product_price)->associate('\App\Models\Product');
            session()->flash('success_message', 'Item added in Cart');
            return redirect()->route('shop');
        } else {
            return redirect()->route('login');
        }
    }

    public function changePageSize($size){
        $this->pageSize = $size;
    }

    public function changeOrderBy($order){
        $this->orderBy = $order;
    }

    public function render()
    {
        $products = Product::where('name', 'like', $this->search_term)->orderBy('price', 'ASC')->paginate($this->pageSize);
        $category = Category::orderBy('name', 'ASC')->get();
        return view('livewire.search-component', ['products' => $products, 'category' => $category]);
    }
}
