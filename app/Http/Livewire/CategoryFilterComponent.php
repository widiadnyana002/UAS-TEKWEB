<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use Cart;
use Illuminate\Support\Facades\Auth;

class CategoryFilterComponent extends Component
{
    use WithPagination;
    public $pageSize = 12;
    public $orderBy = "Default Sorting";
    public $slug;

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
        return view('livewire.admin.category-filter-component', ['products' => $products, 'categories' => $categories, 'category_name' => $category_name])->layout('layouts.admin');;;
    }
}
