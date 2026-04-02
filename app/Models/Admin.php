<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin'; // 🔥 WAJIB
    protected $primaryKey = 'admin_id';
    protected $fillable = ['nama'];

    public function umpanBalik()
    {
        return $this->hasMany(UmpanBalik::class, 'admin_id');
    }
}