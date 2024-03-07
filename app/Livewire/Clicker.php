<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\Attributes\Validate;

class Clicker extends Component
{
    /**
     * the public properties are aways visible for
     * the users, so don't put sensitive data here,
     * if you neeed use sensitive data put it in the 
     * render method with local scope variables
     */
    #[Validate('required|min:2|max:50')]
    public string $name = '';
    
    #[Validate('required|email|unique:users')]
    public string $email = '';

    #[Validate('required|min:8')]
    public string $password = '';

    /**
     * all in the public variables should be validated
     */
    public function createNewUser()
    {
        $validated = $this->validate();

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password'])
        ]);

        $this->reset(['name', 'email', 'password']);

        request()->session()->flash('success', 'User created successfully!');
    }
    public function render()
    {
        $title = 'Users:';

        $users = User::all();

        return view('livewire.clicker', [
            'title' => $title,
            'users' => $users
        ]);
    }
}
