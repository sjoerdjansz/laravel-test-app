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
        'baby_name',
        'birthday'
    ];

// De attributen die verborgen moeten blijven voor serialisatie.
    protected $hidden = [
        'password',
    ];


    protected function casts() {
        return [
            'birthday' => 'date',
            'password' => 'hashed',
        ];
    }

    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }


}
