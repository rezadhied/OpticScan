<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelUser extends Model
{
    use HasFactory;

    protected $table = 'model_user'; 

    protected $fillable = [
        'name',
        'username',
        'email',
        'phone',
        'birthdate',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
    ];
}
