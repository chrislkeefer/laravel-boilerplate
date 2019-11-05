<?php

namespace App\Interactions;

use App\Events\UserCreated;
use Illuminate\Support\Facades\Hash;

use App\User;

class CreateUser 
{
    public function handle($data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        event(new UserCreated($user));

        return $user;
    }
}