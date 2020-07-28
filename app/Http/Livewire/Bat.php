<?php

namespace App\Http\Livewire;

use App\Player;
use Livewire\Component;

class Bat extends Component
{
    public $player_id, $date, $inning, $balls = 0, $strikes = 0, $outcome, $first_name;

    public function mount(Player $player)
    {
        $this->first_name = $player->first_name;
        $this->player_id = $player->id;
    }

    public function store()
    {
        $validateData = $this->validate([
           'player_id' => 'required',
           'date' => 'required',
           'inning' => 'required',
            'balls' => 'required',
            'strikes' => 'required',
            'outcome' => 'required',
        ]);

//        dd($validateData);

        \App\Bat::create($validateData);

        return redirect('/players');
    }

    public function ballIncrement()
    {
        $this->balls+=1;
    }

    public function strikeIncrement()
    {
        $this->strikes++;
    }

    public function ballDecrement()
    {
        if($this->balls>0){
            $this->balls-=1;
        }
    }

    public function strikeDecrement()
    {
        if($this->strikes>0){
            $this->strikes-=1;
        }
    }

    public function render()
    {
        return view('livewire.bat');
    }
}
