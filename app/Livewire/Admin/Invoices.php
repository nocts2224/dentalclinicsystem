<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Invoices extends Component
{
    public function render()
    {
        return view('livewire.admin.invoices')->layout('admin.layouts');
    }
}
