<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBimbingan extends Model
{
    use HasFactory;
    protected $table = 'bimbingan';
    protected $fillable = [
        'nidn',
        'name',
        'email',
        'password',
        'status',
        // 'created_at',
    ];  
}
