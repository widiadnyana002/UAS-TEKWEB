<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class OrderComponent extends Component
{

    public function updated($field){
        $this->validateOnly($field,[
            'email' => 'required',
            'product_id' => 'required'
        ]);
    }

    public function storeCategory(){
        $this->validate([
            'name' => 'required'
        ]);

        $category = new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;

        $category->save();
        session()->flash('message', 'Category has been created succesfully!');

    }

    public function render()
    {
        return view('livewire.order-component');
    }
}
