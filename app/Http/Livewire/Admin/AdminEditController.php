<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use illuminate\Support\Str;

class AdminEditController extends Component
{
    use WithFileUploads;

    public $product_id;
    public $name;
    public $slug;
    public $category_id;
    public $price;
    public $description;
    public $image;
    public $newImage;

    public function mount($product_id){
        $product = Product::find($product_id);
        $this->product_id = $product->id;
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->category_id = $product->category_id;
        $this->price = $product->price;
        $this->description = $product->description;
        $this->image = $product->image;
    }

    public function generateSlug(){
        $this->slug = Str::slug($this->name);
    }

    public function updateProduct(){
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        $product = Product::find($this->product_id);
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->category_id = $this->category_id;
        $product->price = $this->price;
        $product->description = $this->description;
        if($this->newImage){
            unlink('storage/'. $product->image);
            $imageName = $this->newImage->store('public/products');
            $product->image = $imageName;
        }
        $product->save();
        session()->flash('message', 'Product has been updated successfully!');
    }
    public function render()
    {
        $category = Category::orderBy('name','ASC')->get();
        return view('livewire.admin.admin-edit-controller', ['category'=>$category])->layout('layouts.admin');;;;
    }
}
