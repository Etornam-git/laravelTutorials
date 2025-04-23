<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;

    protected $fillable = ['name', 'user_id'];

    // this function serves as a relationship that states that : Every employer does multiple jobs
    public function job(): HasMany
    {
        return $this->hasMany(job::class);
    }
}
