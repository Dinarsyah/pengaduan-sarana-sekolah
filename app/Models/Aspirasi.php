<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    protected $table = 'aspirasi'; // 🔥 WAJIB
    protected $primaryKey = 'aspirasi_id';
    protected $fillable = ['siswa_id', 'kategori_id', 'deskripsi', 'status_id'];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function umpanBalik()
    {
        return $this->hasMany(UmpanBalik::class, 'aspirasi_id');
    }
}