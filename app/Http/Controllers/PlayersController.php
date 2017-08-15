<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Team;

class PlayersController extends Controller
{
  public function show($id){
    $player = Player::find($id);
    return view('players.show', compact('player') );
  }

  public function create($id){
    return view('players.create', compact('id'));
  }

  public function store($id){
    $this->validate(request(), [
      'first_name' => 'required|min:2',
      'last_name' => 'required|min:2',
      'email' => 'required|email|unique:players',
    ]);

    Player::create([
      'first_name' => request('first_name'),
      'last_name' => request('last_name'),
      'email' => request('email'),
      'team_id' => $id,
    ]);

    $team = Team::find($id);
    return view('teams.show', compact('team') );
  }
}
