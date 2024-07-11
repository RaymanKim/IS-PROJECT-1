<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use AddAppointmentsTable;
use CreateDiagnosesTable;
use CreateDoctorsActionsTable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class Doctors extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'doctorName',
        'doctorPassword',
        'doctorEmail',
        'officeLocation',
        'officeName',
        'Specialization',
        'license_no',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'doctorPassword',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'doctorEmail_verified_at' => 'datetime',
            'doctorPassword' => 'hashed',
        ];
    }
    public function consultations()
    {
        return $this->hasMany(Consultation::class);
    }

    public function diagnoses()
    {
        return $this->hasMany(Diagnosis::class);
    }

    public function doctorActions()
    {
        return $this->hasMany(DoctorAction::class);
    }
}
