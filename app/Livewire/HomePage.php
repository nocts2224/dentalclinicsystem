<?php

namespace App\Livewire;

use Livewire\Component;

class HomePage extends Component
{   
    //SPA style Not implemented yet 
    // public function goToLogin(){
    //     $this->emitUp('goToLogin');
    // }

    public function toLogin(){
        return redirect()->to('/login');
    }

    public function toDashboard(){
        return redirect()->to('/admin/dashboard');
    }

    public function render()
    {
        return view('livewire.home-page')->layout('layouts.app');
    }
}
