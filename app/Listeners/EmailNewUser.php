<?php

namespace App\Listeners;

use App\Events\UserCreated;
use App\Mail\UserRegistered;
use Illuminate\Support\Facades\Mail;

class EmailNewUser
{
    public function __construct()
    {
        //
    }

    public function handle(UserCreated $event)
    {
        Mail::to($event->user)
            ->send(new UserRegistered($event));
    }
}