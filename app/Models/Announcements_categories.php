<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcements_categories extends Model
{
    use HasFactory, Sluggable;
    protected $table = 'announcement_categories';
    protected $primaryKey = 'kategori_id';
    protected $fillable = [
        'kategori_nama',
        'kategori_slug',
    ];

    public function sluggable(): array
    {
        return [
            'kategori_slug' => [
                'source' => 'kategori_nama'
            ]
        ];
    }
}
