<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
    /**
     * the public properties are aways visible for
     * the users, so don't put sensitive data here,
     * if you neeed use sensitive data put it in the 
     * render method with local scope variables
     */
    public string $name;
    public string $email;
    public string $password;

    /**
     * all in the public variables should be validated
     */
    public function createNewUser()
    {
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
