<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User as UserModal;
use Illuminate\Support\Facades\URL;

class ResetPasswordMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $full_name, $email, $actions, $expire_time;
    public function __construct($id, $token)
    {
        $user = UserModal::findOrFail($id);
        $this->full_name = $user->Full_Name;
        $this->email = $user->email;
        $this->actions = URL::temporarySignedRoute('reset.password.view', now()->addMinutes(config('custom_configs.expire_time')), [$token]);
        $this->expire_time = config('custom_configs.expire_time');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.mail-reset-password')
            ->subject('StudyEarth password reset');
    }
}
