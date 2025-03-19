<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;

    public function job():BelongsToMany {
                // our job model is represented by job_listings in tableplus, hence it's primary key is job_listing_id,
        //  that is why it has been declared here as relatedPivotKey:'job_listing_id'
        return $this->belongsToMany(job::class, relatedPivotKey:'job_listing_id');
    }

    public function post():BelongsToMany {
        return $this->belongsToMany(Post::class);
    }
}
