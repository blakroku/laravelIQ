<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;
use Spatie\Tags\Tag;

class Post extends Model
{
    use HasFactory, HasTags;

    protected $guarded = [];

    public function author(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    protected $casts = [
        'original_published_at' => 'date',
        'original_post_at' => 'date',
    ];

    public function post_image()
    {
        return $this->hasOne(PostImage::class);
    }

    public function credits(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Credits::class);
    }
}
