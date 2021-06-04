<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomProjectsForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'contact_number',
        'selected_platform',
        'project_description',
        'isMailSent'
    ];
}
