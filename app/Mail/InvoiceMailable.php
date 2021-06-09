<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class InvoiceMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $txn_id, $amount, $product, $order_id, $date, $user_name;
    public function __construct($txn_id, $amount, $paid_for, $order_id, $date, $user_id)
    {
        $user = User::findORFail($user_id);
        $pdf = PDF::loadView('email.invoice', [
            'date' => $date,
            'txn_id' => $order_id,
            'amount' => $amount,
            'product' => $paid_for,
            'name' => $user->firstName,
            'email' => $user->email,
            'mobile' => $user->mobileNo,
            'address' => $user->address,
            'dob' => $user->dob
        ]);
        $file_name  = $user_id . '_' . now() . '.pdf';
        session()->put('fnia', $file_name);
        Storage::put('/invoices/' . $file_name, $pdf->output());
        $this->product  = $paid_for;
        $this->order_id = $order_id;
        $this->amount = $amount;
        $this->user_name = $user->firstName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.mail')
            ->attachFromStorage('/invoices/' . session('fnia'), session('fnia'), ['mime' => 'application/pdf'])
            ->subject('Template Chalse!!');
    }
}
