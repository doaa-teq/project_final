<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userr extends Model
{
    use HasFactory;
    protected $fillable=[
        'full_name',
        'user_name',
        'email',
        'Active',
        'password',
        'registration_time',
    ];
}
