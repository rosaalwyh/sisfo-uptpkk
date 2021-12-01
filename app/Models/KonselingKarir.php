<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonselingKarir extends Model
{
    use HasFactory;
    protected $table = 'konseling_karirs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'konseling_judul',
        'konseling_penulis',
        'konseling_konten',
        'konseling_tanggal',
        'konseling_foto',
    ];
}
