<?php

namespace App\Models;

use CreateDoctorsTable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorAction extends Model
{
    use HasFactory;
    protected $table = 'doctor_actions';

    protected $fillable = [
        'doctor_id',
        'diagnosis_act',
    ];
    public function doctor()
    {
        return $this->belongsTo(CreateDoctorsTable::class);
    }
}
