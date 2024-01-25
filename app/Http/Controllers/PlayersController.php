<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function index(Team $team)
    {
        return view('players', ['team' => $team]);
    }

    public function create(Team $team)
    {
        $palyer = new Player();
        $palyer->team_id = $team->id;
        $palyer->name = request()->player_name;
        $palyer->position = request()->player_position;
        $palyer->number = request()->player_number;
        $palyer->save();
        return redirect()->back();
    }
}