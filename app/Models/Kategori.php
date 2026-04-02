<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori'; // 🔥 WAJIB
    protected $primaryKey = 'kategori_id';
    protected $fillable = ['nama'];

    public function aspirasi()
    {
        return $this->hasMany(Aspirasi::class, 'kategori_id');
    }
}