<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;

class GuardianUser extends Authenticatable
{
    use HasFactory;

    public function guardian(): BelongsTo
    {
        return $this->belongsTo(Guardian::class);
    }
}
