<?php

namespace App\Livewire;

use Livewire\Component;

class PageController extends Component
{   
    public $currentPage = 'home'; // default page

    protected $listeners = [
        'goToPublicPage' => 'showPublicPage',
        'goToLoginPage' => 'showLoginPage',
    ];

    public function showPublicPage()
    {
        $this->currentPage = 'public';
    }

    public function showLoginPage()
    {
        $this->currentPage = 'login';
    }
    public function render()
    {
        return view('livewire.page-controller');
    }
}
