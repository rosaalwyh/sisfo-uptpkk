<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory, Sluggable;
    protected $table = 'news';
    protected $primaryKey = 'berita_id';

    public function sluggable(): array
    {
        return [
            'berita_slug' => [
                'source' => 'berita_judul'
            ]
        ];
    }
}
