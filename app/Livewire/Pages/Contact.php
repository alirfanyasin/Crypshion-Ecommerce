<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Layout('layouts.app')]
#[Title('Contact')]

class Contact extends Component
{


    public function render()
    {
        return view('livewire.pages.contact');
    }
}
