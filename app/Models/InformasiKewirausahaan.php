<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiKewirausahaan extends Model
{
    use HasFactory;
    protected $table = 'informasi_kewirausahaans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'informasi_judul',
        'informasi_penulis',
        'informasi_konten',
        'informasi_tanggal',
        'informasi_foto'
    ];
}
