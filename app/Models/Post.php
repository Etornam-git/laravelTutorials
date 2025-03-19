<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;



class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = ['title', 'content'];

    public function comments(): HasMany{
        return $this->hasMany(Comment::class);
    }

    
    public function tags():BelongsToMany {
        return $this->belongsToMany(Tag::class);
    }
}
