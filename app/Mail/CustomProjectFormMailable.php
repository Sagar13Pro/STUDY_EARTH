<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomProjectFormMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $full_name, $email, $contact_number, $selected_platform, $requirements;
    public function __construct($full_name, $email, $contact_number, $selected_platform, $requirements)
    {
        $this->full_name = $full_name;
        $this->email = $email;
        $this->contact_number  = $contact_number;
        $this->selected_platform  = $selected_platform;
        $this->requirements = $requirements;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail-custom-projects');
    }
}
