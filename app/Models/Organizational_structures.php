<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizational_structures extends Model
{
    use HasFactory;
    protected $table = 'organizational_structures';
    protected $primaryKey = 'struktur_id';
    protected $fillable = [
        'struktur_foto'
    ];
}
