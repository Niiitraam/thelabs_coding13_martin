<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailsend;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailContent)
    {
        $this->mailsend = $mailContent;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('martinmdvld@gmail.com')->view('email-contact')->with(['mailContent' => $this->mailsend]);

    }
}
