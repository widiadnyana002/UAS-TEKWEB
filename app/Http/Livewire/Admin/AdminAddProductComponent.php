<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;
use illuminate\Support\Str;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $category_id;
    public $price;
    public $description;
    public $image;

    

    public function generateSlug(){
        $this->slug = Str::slug($this->name);
    }

    public function addProduct(Request $request){
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->category_id = $this->category_id;
        $product->price = $this->price;
        $product->description = $this->description;
       
        $imageName = $this->image->store('public/products');
        $product->image = $imageName;
        $product->save();
        $this->emit('productAdded');
        $this->name = '';
        $this->slug = '';
        $this->category_id = '';
        $this->price = '';
        $this->description = '';
        $this->image = '';
        session()->flash('message', 'Product has been added successfully!');
    }

    public function render()
    {
        $category = Category::orderBy('name','ASC')->get();
        return view('livewire.admin.admin-add-product-component', ['category'=>$category])->layout('layouts.admin');;;;
    }
}
