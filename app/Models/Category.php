<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    // Define the one-to-many relationship with News
    public function news(): HasMany
    {
        return $this->hasMany(News::class);
    }
}
