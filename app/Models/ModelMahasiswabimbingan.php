<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelMahasiswabimbingan extends Model
{
    use HasFactory;
    protected $table = 'mahasiswabimbingan';
    protected $fillable = [
        'nidn',
        'name',
        'email',
        'password',
        'status',
        // 'created_at',
    ];  
}
