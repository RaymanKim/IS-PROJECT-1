<?php

namespace App\Models;

use CreateDoctorsTable;
use CreateUsersTable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Consultation extends Model
{
    use HasFactory;
    protected $table = 'appointments';

    protected $fillable = [
        'title',
        'description',
        'action_data',
        'payment_status',
        'patient_id',
    ];
    public function consultations(): BelongsToMany
    {
        return $this->belongsToMany(Consultation::class)->withPivot('role') ->withTimestamps();
    }
    public function actions(): HasMany
    {
        return $this->hasMany(PatientAction::class);
    }
}
