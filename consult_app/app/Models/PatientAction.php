<?php

namespace App\Models;

use CreatePatientActionsTable;
// use CreateUsersTable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientAction extends Model
{
    use HasFactory;
    protected $table = 'patient_actions';

    protected $fillable = [
        'patient_id',
        'diagnosis_act',
    ];
    public function patient()
    {
        return $this->belongsTo(CreatePatientActionsTable::class);
    }
}
