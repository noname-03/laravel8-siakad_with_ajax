<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jadwal;
use App\Models\Absen;

class Matakuliah extends Model
{
    use HasFactory;
    protected $table = 'matakuliah';
    protected $guarded = [];

    public function Jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }
    public function Absen()
    {
        return $this->hasMany(Absen::class);
    }
}
