<?php

namespace App\Livewire\Pages\App;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dashboard')]
#[Layout('layouts.app_admin')]

class Dashboard extends Component
{


    public function render()
    {
        return view('livewire.pages.app.dashboard');
    }
}
