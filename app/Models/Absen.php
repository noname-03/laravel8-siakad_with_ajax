<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Matakuliah;
use App\Models\Mahasiswa;

class Absen extends Model
{
    use HasFactory;

    protected $table = 'absen';
    protected $guarded = [];

    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class);
    }
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
}
