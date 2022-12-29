<?php

namespace App\Http\Livewire\Nav;

use Livewire\Component;

class Navbar extends Component{
    public function render(){
        $currentURL = parse_url(url()->current());
        if(!isset($currentURL['path'])) $currentURL['path'] = '';
        return view('livewire.nav.navbar', ['']);
    }
}