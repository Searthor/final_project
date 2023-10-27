<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowPosts extends Component
{

    public $name;

    public function render()
    {

        if($this->name=="searthor"){
            dd($this->name);
        }
        return view('livewire.show-posts')->layout('layouts.backend.base');
    }
}
