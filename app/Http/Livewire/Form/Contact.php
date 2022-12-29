<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;

class Contact extends Component{
    public $name;
    public $email;
    protected $rules = [
        'name' => ['required', 'min:6'],
        'email' => ['required', 'email'],
    ];
    public function submit(){
        $this->validate();
        dd([$this->name, $this->email]);
    }

    public function clicked(){

    }
    public function render(){
        return view('livewire.form.contact');
    }
}