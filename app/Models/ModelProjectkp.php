<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelProjectkp extends Model
{
    use HasFactory;
    protected $table = 'projectkp';
    protected $fillable = [
        'namalengkap',
        'namafile',
        // 'created_at',
    ];  
}
