<?php

namespace App\Models;

// use CreatePatientActionsTable;
// use CreateUsersTable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PatientAction extends Model
{
    use HasFactory;
    protected $table = 'patient_actions';

    protected $fillable = [
        'consultation_id',
        'user_id',
        'action_type',
        'action_data',
    ];

    // public function consultation(): BelongsTo
    // {
    //     return $this->belongsTo(Consultation::class);
    // }
    // public function user(): BelongsTo
    // {
    //     return $this->belongsTo(User::class);
    // }
}
