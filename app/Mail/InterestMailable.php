<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InterestMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $first_name, $last_name, $email, $number, $address, $purpose, $amount, $order_id, $date;
    public function __construct($first_name, $last_name, $email, $number, $address, $purpose, $amount, $order_id ,$date)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->number  = $number;
        $this->address  = $address;
        $this->purpose = $purpose;
        $this->amount = $amount;
        $this->order_id = $order_id;
        $this->date = $date;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.mail-interest')
        ->subject('StudyEarth Interest Details');;
    }
}
