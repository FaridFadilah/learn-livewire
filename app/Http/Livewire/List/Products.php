<?php

namespace App\Http\Livewire\List;

use Livewire\Component;

class Products extends Component{
    public $products;
    public function render(){
        return view('livewire.list.products');
    }
}