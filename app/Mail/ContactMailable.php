<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $full_name, $email, $contact_number, $msg;
    public function __construct($name, $email, $contact_number, $msg)
    {
        $this->full_name = $name;
        $this->email = $email;
        $this->contact_number = $contact_number;
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.mail-contact')
            ->subject('Contact Form Submission');
    }
}
