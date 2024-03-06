<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
    public $username = 'Test User';
    public function createNewUser() 
    {
        User::create([
            'name' => 'Test 2',
            'email' => 'test2@test.com',
            'password' => '12345678'
        ]);
    }
    public function render()
    {
        $title = 'Test';

        $users = User::all();

        return view('livewire.clicker', [
            'title' => $title,
            'users' => $users
        ]);
    }
}
