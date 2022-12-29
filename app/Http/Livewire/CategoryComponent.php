<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use Cart;
use Illuminate\Support\Facades\Auth;

class CategoryComponent extends Component
{
    use WithPagination;
    public $pageSize = 12;
    public $orderBy = "Default Sorting";
    public $slug;

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

    public function mount($slug){
        $this->slug = $slug;
    }

    public function render()
    {
        $category = Category::where('slug', $this->slug)->first();
        $category_id = $category->id;
        $category_name = $category->name;
        $products = Product::where('category_id', $category_id)->orderBy('price', 'ASC')->paginate($this->pageSize);
        $categories = Category::orderBy('name', 'ASC')->get();
        return view('livewire.category-component', ['products' => $products, 'categories' => $categories, 'category_name' => $category_name]);
    }
}
