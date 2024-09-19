<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Profesion extends Model
{
    use HasFactory;

    // Relationships
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
    public function area(): BelongsTo
    {
        return $this->belongsTo(Area::class);
    }
}
