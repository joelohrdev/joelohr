<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $fillable = [
        'name',
    ];

    public function tournamentDates()
    {
        return $this->hasMany(TournamentDate::class);
    }
}
