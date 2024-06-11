<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientReport extends Model
{
    use HasFactory;

    protected $table = 'patient_reports'; 

    protected $primaryKey = 'patient_id';

    protected $fillable = [
        'user_id',
        'report_id',
    ];

    public function user()
    {
        return $this->belongsTo(ModelUser::class, 'user_id', 'id');
    }

    public function report()
    {
        return $this->belongsTo(Report::class, 'report_id', 'report_id');
    }
}
