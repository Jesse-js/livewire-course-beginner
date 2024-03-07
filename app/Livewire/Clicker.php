<?php

namespace App\Livewire;

use App\Models\User;
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
        $this->validate();
        // $this->validate([
        //     'name' => 'required|min:2|max:50',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:8'
        // ]);
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);
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
