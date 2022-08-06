<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;
use App\Models\Semester;

class KontrakMatakuliah extends Model
{
    use HasFactory;

    protected $table = 'Kontrak_matakuliah';
    protected $guarded = [];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }
}
