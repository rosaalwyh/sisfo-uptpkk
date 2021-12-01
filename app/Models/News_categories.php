<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News_categories extends Model
{
    use HasFactory, Sluggable;
    protected $table = 'news_categories';
    protected $primaryKey = 'kategori_id';

    public function sluggable(): array
    {
        return [
            'kategori_slug' => [
                'source' => 'kategori_nama'
            ]
        ];
    }
}
