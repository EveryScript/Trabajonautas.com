<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;

    protected $table = "Companies"; // Vinculate to table with this name
    protected $guarded = []; // All propeties visible

    // Relationships
    public function user():BelongsTo {
        return $this->belongsTo(User::class);
    }
}
