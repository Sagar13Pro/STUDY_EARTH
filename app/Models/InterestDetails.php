<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterestDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'interest_fname',
        'interest_lname',
        'interest_mail',
        'interest_mobile',
        'interest_address',
        'interest_dob',
        'interest_purpose',
        'interest_amount'
    ];
}
