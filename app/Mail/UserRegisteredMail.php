<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Events\UserCreated;

class UserRegisteredMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $event;

    public function __construct(UserCreated $event)
    {
        $this->event = $event;
    }

    public function build()
    {
        return $this->subject('Welcome to Harpoon App')->view('mail.users.registered', ['name' => $this->event->user->name]);
    }
}
