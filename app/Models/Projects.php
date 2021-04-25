<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    //Accessor
    public function getTitleAttribute($value)
    {
        return ucwords($value);
    }
    public function getTypeAttribute($value)
    {
        return strtolower($value);
    }
    public function getLangugaeAttribute($value)
    {
        return strtolower($value);
    }
}
