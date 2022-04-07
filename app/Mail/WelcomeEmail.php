<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;

    public function __construct($user)
    {
        $this->user=$user;
    }

    /**
     * Build the message.
     *
     * @param $user
     * @return $this
     */
    public function build()
    {
        return $this->view('email.welcome')->with('user', $this->user);
    }
}
