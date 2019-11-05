<?php

namespace App\Listeners;

use App\Events\UserCreated;
use App\Mail\UserRegisteredMail;
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
            ->send(new UserRegisteredMail($event));
    }
}