<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

// De attributen die verborgen moeten blijven voor serialisatie.
    protected $hidden = [
        'password',
    ];

    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }


}
