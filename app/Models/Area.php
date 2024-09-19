<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Area extends Model
{
    use HasFactory;

    // Relationships
    public function profesions(): HasMany
    {
        return $this->hasMany(Profesion::class);
    }
    public function announcements():HasMany
    {
        return $this->hasMany(Announcement::class);
    }
}
