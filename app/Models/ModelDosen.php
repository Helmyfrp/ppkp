<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelDosen extends Model
{
    use HasFactory;
    protected $table = 'dosen';
    protected $fillable = [
        'nidn',
        'name',
        'email',
        'password',
        'status',
        // 'created_at',
    ];  
    public function Dosenpembimbing(){
        return $this->hasMany(Dosenpembimbing::class);
    }

}
