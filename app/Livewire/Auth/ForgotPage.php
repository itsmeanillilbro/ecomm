<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Password;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Component;

class ForgotPage extends Component
{
    use LivewireAlert;
    #[Title('Forget Password - Prakriti Store')]

    public $email;
public function save(){
    $this->validate([
        'email'=>'email|required|exists:users,email|max:255',
    ]);

    $status= Password::sendResetLink(['email'=>$this->email]);


    if($status===Password::RESET_LINK_SENT){
        $this->alert('success', 'Reset Password Link Sent Successfully', [
            'position' => 'top-end',
            'toast' => true,
            'timerProgressBar' => true,
            'timer' => 7000,
          ]);
          $this->reset();
    }
}
    public function render()
    {
        return view('livewire.auth.forgot-page');
    }
}
