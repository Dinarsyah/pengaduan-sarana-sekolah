<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status'; // 🔥 WAJIB
    protected $primaryKey = 'status_id';
    protected $fillable = ['nama'];

    public function aspirasi()
    {
        return $this->hasMany(Aspirasi::class, 'status_id');
    }
}