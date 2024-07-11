<?php

namespace App\Models;

use CreateDoctorsTable;
use CreateUsersTable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Consultation extends Model
{
    use HasFactory;
    protected $table = 'appointments';

    protected $fillable = [
        'patient_id',
        'doctor_id',
        'booked_at',
        'payment_status',
    ];
    public function patient(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctors::class);
    }
}
