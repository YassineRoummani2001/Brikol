<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TermsOfUse extends Component
{
    public function render()
    {
        return view('livewire.terms-of-use')->layout('layouts.base');
    }
}
