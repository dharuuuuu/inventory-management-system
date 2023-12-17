<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', #judul
        'slug', #url artikel
        'content', #konten
        'image', #cover
        'tags', #tag
        'author_id', #penulis
    ];
}