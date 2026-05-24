<?php

namespace App\Livewire;

use Livewire\Component;

class AuthLogin extends Component
{
    public $form = "login";

    public function loginToRegister()
    {
        $this->form = "register";
    }

    public function render()
    {
        return view('livewire.auth-login');
    }
}
