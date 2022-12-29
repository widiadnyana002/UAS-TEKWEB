<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;

class AdminCategoriesComponent extends Component
{
    public $category_id;

    use WithPagination;

    public function deleteCategory($id){
        Category::find($id)->delete();
        $this->mount();
        session()->flash('message', 'Category has been deleted succesfully!');
    }
    
    public function render()
    {
        $category = Category::orderBy('name', 'ASC')->paginate(5);
        return view('livewire.admin.admin-categories-component', ['category'=>$category])->layout('layouts.admin');;;
    }
}
