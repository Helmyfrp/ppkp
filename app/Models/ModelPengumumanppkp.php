<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPengumumanppkp extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'nim',
        'name',
        'email',
        'password',
        'status',
        // 'created_at',
    ];  
}
