<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email = '';
    public $password = '';
    public $remember = false;

    public function login(){

$credentials = $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
],[
    'email.required'=>'O campo e-mail é obrigatório.',
    'email.email'=>'O campo e-mail deve ser um endereço de e-mail válido.',
    'password.required'=>'O campo senha é obrigatório.',
        ]);
        if(!Auth::attempt($credentials, $this->remember)){
            session()->flash('error', 'email e senha inválidos.');
        }
        $user = Auth::user();
        if(!$user->isAdmin()){
            Auth::logout();
            request()->session()->invalidate();
            request()->session()->regenerateToken();
            session()->flash('error', 'Você não tem permissão para acessar esta página.');
    }
    request()->session()->regenerate();

    return redirect()->intended(route('dashboard'));
    }
    public function render()
    {

        return view('livewire.auth.login');
    }
}
