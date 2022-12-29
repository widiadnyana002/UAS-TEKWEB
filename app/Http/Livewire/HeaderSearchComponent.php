<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class HeaderSearchComponent extends Component
{
    public $search='';
    public $pageSize = 12;
    
    public function changePageSize($size){
        $this->pageSize = $size;
    }

    public function render()
    {
        $products = Product::where('name', 'like', '%'.$this->search.'%')->paginate($this->pageSize);
        return view('livewire.header-search-component', ['products' => $products]);
    }
}
