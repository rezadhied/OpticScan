<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $primaryKey = 'report_id';

    protected $fillable = [
        'user_id',
        'patient_id',
        'register_date',
        'test_status',
        'diagnose',
    ];

    public function user()
    {
        return $this->belongsTo(ModelUser::class, 'user_id', 'id');
    }

    public function patientReport()
    {
        return $this->hasOne(PatientReport::class, 'report_id', 'report_id');
    }

    public function reportData()
    {
        return $this->hasOne(ReportData::class, 'report_id', 'report_id');
    }
}
