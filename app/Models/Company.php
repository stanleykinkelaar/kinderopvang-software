<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;

    public function systemUsers(): HasMany
    {
        return $this->hasMany(SystemUser::class);
    }

    public function groups(): HasMany
    {
        return $this->hasMany(Group::class);
    }

    public function guardians(): HasMany
    {
        return $this->hasMany(Guardian::class);
    }
}
