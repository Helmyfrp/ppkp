<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelDosenpembimbing extends Model
{
    use HasFactory;
    protected $table = 'dosenpembimbing';
    protected $fillable = [
        'nidn',
        'name',
        'email',
        'password',
        'status',
        // 'created_at',
    ];  
    public function Dosen(){
        return $this->belongsToMany(Dosen::class);
    }
    public function Dosenpembimbing(){
        return $this->belongsTo(Dosen::class);
    }
}
