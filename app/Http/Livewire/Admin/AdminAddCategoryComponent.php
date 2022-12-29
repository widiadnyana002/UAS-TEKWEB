<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use illuminate\Support\Str;

class AdminAddCategoryComponent extends Component
{
    public $name;
    public $slug;

    public function generateSlug(){
        $this->slug = Str::slug($this->name);
    }

    public function updated($field){
        $this->validateOnly($field,[
            'name' => 'required',
            'slug' => 'required'
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
        $this->emit('categoryAdded');
        $this->name = '';
        $this->slug = '';
        session()->flash('message', 'Category has been created succesfully!');

    }

    public function render()
    {
        
        return view('livewire.admin.admin-add-category-component')->layout('layouts.admin');;;;;
    }
}
