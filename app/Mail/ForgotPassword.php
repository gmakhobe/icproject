<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgotPassword extends Mailable
{
    use Queueable, SerializesModels;

    protected $mailArg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailArg)
    {
        $this->mailArg = $mailArg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail/forgotpassword', ["mailArg" => $this->mailArg]);
    }
}
