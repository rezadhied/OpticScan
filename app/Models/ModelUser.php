<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ModelUser extends Authenticatable
{
    use HasFactory, Notifiable;

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
        'remember_token',
        // tambahkan atribut yang perlu disembunyikan (jika ada)
    ];

    public function reports()
    {
        return $this->hasMany(Report::class, 'user_id', 'id');
    }

    public function patientReports()
    {
        return $this->hasMany(PatientReport::class, 'user_id', 'id');
    }
}

