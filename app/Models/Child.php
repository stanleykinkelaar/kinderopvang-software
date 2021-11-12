<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Child extends Model
{
    use HasFactory;

    protected $casts = [
        'birthdate' => 'date',
    ];

    public function guardian(): BelongsTo
    {
        return $this->belongsTo(Guardian::class);
    }
}
