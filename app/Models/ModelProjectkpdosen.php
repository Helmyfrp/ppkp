<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelProjectkpdosen extends Model
{
    use HasFactory;
    protected $table = 'projectkpdosen';
    protected $fillable = [
        'namalengkap',
        'namafile',
        // 'created_at',
    ];  
}
