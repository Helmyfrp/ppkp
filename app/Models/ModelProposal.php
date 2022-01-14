<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelProposal extends Model
{
    use HasFactory;
    protected $table = 'proposal';
    protected $fillable = [
        'namalengkap',
        'namafile',
        // 'created_at',
    ];  
}
