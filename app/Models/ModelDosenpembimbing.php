<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ModelMahasiswa;

class ModelDosenpembimbing extends Model
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
    public function Dosen(){
        return $this->belongsToMany(Dosen::class);
    }
    public function Dosenpembimbing(){
        return $this->belongsTo(Dosen::class);
    }
    public function Mahasiswa(){
        return $this->belongsToMany(ModelMahasiswa::class,'dosen_id');
    }
}
