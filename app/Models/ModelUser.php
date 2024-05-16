<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ModelUser extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'model_user'; // Nama tabel yang digunakan

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        // sesuaikan atribut fillable dengan kolom yang sesuai di tabel Anda
    ];

    protected $hidden = [
        'password',
        'remember_token',
        // tambahkan atribut yang perlu disembunyikan (jika ada)
    ];
}

