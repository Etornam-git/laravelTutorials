<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Comment extends Model
{
    protected $table = 'comments';
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;
    // protected $fillable = [];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
