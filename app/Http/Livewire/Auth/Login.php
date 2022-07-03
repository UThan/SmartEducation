<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email,$password,$remember;

    protected $rules = [
        'name' => 'required',
        'password' => 'required'
    ];
    
    public function render()
    {
        return view('livewire.auth.login')->layout('layouts.auth');
    }

    public function submit()
    {
        $credential = [
            'email' => $this->email,
            'password' => $this->password
        ];

        if(!Auth::attempt($credential,$this->remember))
        {
            return $this->addError('email' , 'The provided credentials do not match our records.');
        }else
        {
            return redirect()->route('student.all');
        }

        

    }
}
