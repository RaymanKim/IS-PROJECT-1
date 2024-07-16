<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;

class Doctors extends Authenticatable
{
    use HasApiTokens, HasFactory, HasProfilePhoto, Notifiable, TwoFactorAuthenticatable;

    protected $table = 'doctors';
    protected $primaryKey = 'doctor_id';
    protected $guard = 'doctor';

    protected $fillable = [
        'doctorName',
        'doctorPassword',
        'doctorEmail',
        'officeLocation',
        'officeName',
        'Specialization',
        'license_no',
    ];

    protected $hidden = [
        'doctorPassword',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    protected $appends = [
        'profile_photo_url',
    ];

    protected $casts = [
        'doctorEmail_verified_at' => 'datetime',
        'doctorPassword' => 'hashed',
    ];

    // public function consultations()
    // {
    //     return $this->hasMany(Consultation::class);
    // }

    public function diagnoses()
    {
        return $this->hasMany(Diagnosis::class);
    }

    public function doctorActions()
    {
        return $this->hasMany(DoctorAction::class);
    }

    public function getAuthPassword()
    {
        return $this->doctorPassword; // Ensure this matches the password column name
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['doctorPassword'] = Hash::make($value);
    }
}


