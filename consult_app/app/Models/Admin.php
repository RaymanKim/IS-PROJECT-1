<?php

namespace App\Models;

use AddAdminsTable;
use CreateAdminsActionsTable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admins';

    protected $fillable = [
        'admin_name',
        'password',
    ];
    public function adminActions()
    {
        return $this->hasMany(CreateAdminsActionsTable::class);
    }
}
