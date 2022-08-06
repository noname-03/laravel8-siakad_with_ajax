<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Matakuliah;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = 'jadwal';
    protected $guarded = [];

    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class);
    }
}
