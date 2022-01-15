<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;
use App\Models\ModelDosen;

class Perwalian extends Model
{
    use HasFactory;

    protected $table = "perwalian";

    public function Mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'nim');
    }
}
