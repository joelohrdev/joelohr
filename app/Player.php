<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
    ];

    public function bats()
    {
        return $this->hasMany(Bat::class);
    }

    public function pitches()
    {
        return $this->hasMany(Player::class);
    }
}
