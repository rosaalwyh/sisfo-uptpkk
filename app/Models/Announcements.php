<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcements extends Model
{
    use HasFactory, Sluggable;
    protected $table = 'announcements';
    protected $primaryKey = 'pengumuman_id';

    public function sluggable(): array
    {
        return [
            'pengumuman_slug' => [
                'source' => 'penumuman_judul'
            ]
        ];
    }
}
