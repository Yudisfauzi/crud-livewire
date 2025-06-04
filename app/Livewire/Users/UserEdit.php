<?php

namespace App\Livewire\Users;

use Livewire\Component;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class UserEdit extends Component
{
    public $user, $name, $email, $password, $confirm_password;
    public function mount($id){
        $this->user = User::find($id);
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }
    public function render()
    {
        return view('livewire.users.user-edit');
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'same:confirm_password',
        ]);

        $this->user->name = $this->name;
        $this->user->email = $this->email;
        if ($this->password) {
            $this->user->password = Hash::make($this->password);
        }
        
        $this->user->save();

        return to_route('users.index')->with('success', 'User updated successfully.');
    }
}
