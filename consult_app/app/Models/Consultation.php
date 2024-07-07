<?php

namespace App\Models;

use CreateDoctorsTable;
use CreateUsersTable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    protected $table = 'consultations';

    protected $fillable = [
        'patient_id',
        'doctor_id',
        'booked_at',
    ];
    public function patient()
    {
        return $this->belongsTo(CreateUsersTable::class);
    }

    public function doctor()
    {
        return $this->belongsTo(CreateDoctorsTable::class);
    }
}
