<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    use HasFactory;
    // Define the inverse one-to-many relationship with Category
    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}

