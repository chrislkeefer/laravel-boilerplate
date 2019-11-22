<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Verified;
use App\Notifications\EmailVerified;

class SendEmailWelcomingUser
{
    public function handle(Verified $event)
    {
        $event->user->notify(new EmailVerified($event));
    }
}