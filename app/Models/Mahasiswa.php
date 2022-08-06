<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\KontrakMatakuliah;
use App\Models\Absen;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $guarded = [];

    public function Kontrak_matakuliah()
    {
        return $this->hasMany(KontrakMatakuliah::class);
    }
    public function Absen()
    {
        return $this->hasMany(Absen::class);
    }
}
