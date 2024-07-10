<?php

namespace App\Models;

use CreateDoctorsTable;
use CreateIllnessTable;
use CreateUsersTable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    use HasFactory;
    protected $table = 'diagnoses';

    protected $fillable = [
        'patient_id',
        'doctor_id',
        'illness_id',
        'review_status',
    ];
    public function patient()
    {
        return $this->belongsTo(CreateUsersTable::class);
    }

    public function doctor()
    {
        return $this->belongsTo(CreateDoctorsTable::class);
    }

    public function illness()
    {
        return $this->belongsTo(CreateIllnessTable::class);
    }

}
