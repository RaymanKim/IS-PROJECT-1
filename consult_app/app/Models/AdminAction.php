<?php

namespace App\Models;

use AddAdminsTable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminAction extends Model
{
    use HasFactory;
    protected $table = 'admin_actions';

    protected $fillable = [
        'admin_id',
        'doc_selection_act',
    ];
    public function admin()
    {
        return $this->belongsTo(AddAdminsTable::class);
    }
}
