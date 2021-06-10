<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResetPassword extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'token',
    ];
    public function DeleteOldReset()
    {
        ResetPassword::where('email', $this->email)
            ->where('created_at', '<', now()->subMinutes(config('temporayLink.delete_old')))
            ->delete();
    }
}
