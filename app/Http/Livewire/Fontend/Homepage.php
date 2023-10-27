<?php

namespace App\Http\Livewire\Fontend;

use Livewire\Component;

class Homepage extends Component
{
    public function render()
    {
        return view('livewire.fontend.homepage')->layout('layouts.fontend.style');
    }
}
