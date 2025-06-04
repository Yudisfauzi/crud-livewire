<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class UserIndex extends Component
{
    public function render()
    {
        $users = User::get();

        return view('livewire.users.user-index', compact('users'));
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return to_route('users.index')->with('success', 'User deleted successfully.');
    }

    
}
