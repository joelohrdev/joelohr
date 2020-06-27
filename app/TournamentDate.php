<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentDate extends Model
{
    protected $fillable = [
        'tournament_id',
        'date',
        'time',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }
}
