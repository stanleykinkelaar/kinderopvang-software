<?php

namespace App\Models;

use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class SystemUser extends Authenticatable
{
    use Notifiable, CanResetPassword, Notifiable;

    protected $fillable = [
        'firstname', 'lastname', 'email'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function groups(): BelongsToMany
    {
        return $this->belongsToMany(Group::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function getFullName(): string
    {
        return $this->firstname . ' ' . $this->lastname;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
