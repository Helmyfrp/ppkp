<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPengajuanproposal extends Model
{
    use HasFactory;
    protected $table = 'pengajuanproposal';
    protected $fillable = [
        'namalengkap',
        'namafile',
        // 'created_at',
    ];  
}
