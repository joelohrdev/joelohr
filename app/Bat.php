<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bat extends Model
{
    protected $fillable = [
        'player_id',
        'inning',
        'date',
        'balls',
        'strikes',
        'outcome',
    ];

    protected $casts = [
        'date' => 'date',
    ];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
