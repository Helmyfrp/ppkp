<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelFormbimbingan extends Model
{
    use HasFactory;
    protected $table = 'formbimbingan';
    protected $fillable = [
        'nidn',
        'name',
        'email',
        'password',
        'status',
        // 'created_at',
    ];  
}
