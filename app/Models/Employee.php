<?php

namespace App\Models;

use Dom\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
