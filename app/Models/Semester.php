<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\KontrakMatakuliah;

class Semester extends Model
{
    use HasFactory;
    protected $table = 'semester';
    protected $guarded = [];


    public function Kontrak_matakuliah()
    {
        return $this->hasMany(KontrakMatakuliah::class);
    }
}
