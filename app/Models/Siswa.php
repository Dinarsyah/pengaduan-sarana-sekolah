<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa'; // 🔥 WAJIB
    protected $primaryKey = 'siswa_id';
    protected $fillable = ['nama', 'kelas'];

    public function aspirasi()
    {
        return $this->hasMany(Aspirasi::class, 'siswa_id');
    }
}