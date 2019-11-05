<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Verified;
use App\Mail\UserRegisteredMail;
use Illuminate\Support\Facades\Mail;

class SendEmailWelcomingUser
{
    public function __construct()
    {
        //
    }

    public function handle(Verified $event)
    {
        Mail::to($event->user)            
            ->send(new UserRegisteredMail($event));
    }
}