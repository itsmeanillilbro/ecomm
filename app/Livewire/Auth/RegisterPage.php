<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Component;

class RegisterPage extends Component
{
    use LivewireAlert;
    #[Title('Register - Prakriti Store')]

    public $name;
    public $email;
    public $password;

    public function save(){
        $this->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|unique:users|max:255',
            'password'=>'required|min:6|max:255'
        ]);

        $user = User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>Hash::make($this->password),
        ]);


        $this->alert('success', 'Account Created Successfully', [
            'position' => 'top-end',
            'toast' => true,
            'timerProgressBar' => true,
            'timer' => 3000,
          ]);
          $this->reset();

        return redirect()->intended();
    }
    public function render()
    {
        return view('livewire.auth.register-page');
    }
}
