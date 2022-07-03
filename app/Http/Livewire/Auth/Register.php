<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{
    public $name,$email,$password,$password_confirmation;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|unique:users,email',
        'password' => 'required|confirmed'
    ];

    public function mount()
    {
        $this->user = new User();
    }

    public function render()
    {
        return view('livewire.auth.register')->layout('layouts.auth');
    }

    public function submit()
    {
        $this->validate($this->rules);
        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = bcrypt($this->password);
        $user->save();

        if(!Auth::login($user)){
            redirect()->route('login');
        }
        return redirect()->route('student.all');
    }
}
