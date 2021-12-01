<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeminarKarir extends Model
{
    use HasFactory;
    protected $table = 'seminar_karirs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'seminar_judul',
        'seminar_penulis',
        'seminar_konten',
        'seminar_tanggal',
        'seminar_foto'
    ];
}
