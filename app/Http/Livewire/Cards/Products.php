<?php

namespace App\Http\Livewire\Cards;

use Livewire\Component;

class Products extends Component{
    public $products;
    // public $title; 
    // public $deskripsi;

    // public function mount(){
    //     $this->title = $this->product->title;
    //     $this->product = $this->product->title;
    //     $this-> = $this->product->;
    // }
    public function diskon(){
        $this->products['harga'] *= 70/100;
    }

    public function render(){
        $this->diskon();

        return view('livewire.cards.products', $this->products);
    }
}