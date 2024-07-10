<?php

namespace App\Models;

use CreateDiagnosesTable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Illness extends Model
{
    use HasFactory;
    protected $table = 'illnesses';

    protected $fillable = [
        'illness_name',
        'symptom_one',
        'symptom_two',
        'remedy_one',
        'remedy_two',
        'specialist_one',
        'specialist_two',
    ];
    public function diagnoses()
    {
        return $this->hasMany(CreateDiagnosesTable::class);
    }
}
