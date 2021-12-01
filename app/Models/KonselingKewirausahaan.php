<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonselingKewirausahaan extends Model
{
    use HasFactory;
    protected $table = 'konseling_kewirausahaans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'konseling_judul',
        'konseling_penulis',
        'konseling_konten',
        'konseling_tanggal',
        'konseling_foto'
    ];
}
