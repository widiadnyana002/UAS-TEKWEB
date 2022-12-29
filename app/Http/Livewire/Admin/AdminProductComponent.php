<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class AdminProductComponent extends Component
{
    use WithPagination;

    public $search;

    public function deleteProduct($id){
        Product::find($id)->delete();
        $this->mount();
        session()->flash('message', 'Category has been deleted succesfully!');
    }

    public function render()
    {
        $products = Product::where('name', 'like', '%'.$this->search.'%')->paginate(10);
        $category = Category::all();
        return view('livewire.admin.admin-product-component', ['products'=>$products, 'category'=>$category])->layout('layouts.admin');;
    }
}
