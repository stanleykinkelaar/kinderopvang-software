<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PasswordReset extends Model
{
    use HasFactory;

    const UPDATED_AT = null;

    /**
     * @var string[]
     */
    protected $fillable = [
        'email', 'token',
    ];

    public static function generateToken(): string
    {
        return Str::random(64);
    }
}
