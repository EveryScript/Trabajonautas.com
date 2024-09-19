<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Location extends Model
{
    use HasFactory;

    // Relationships
    public function announcements(): BelongsToMany
    {
        return $this->belongsToMany(Announcement::class);
    }
}
