<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'device',
        'project_details_id',
        'course_details_id',
        'payment_status',
        'user_id'
    ];
}
