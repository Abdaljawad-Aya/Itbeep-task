<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class formUser extends Mailable
{
    use Queueable, SerializesModels;
    // i add this so i could receive mail from the user
    // public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */

    //  and add the name variable
    public function __construct()
    {
        //
        // $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // i add the emails
        return $this->view('emails.name');
    }
}