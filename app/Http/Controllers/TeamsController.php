<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamsController extends Controller
{
  public function index(){
    $teams = Team::all();
    return view('teams.index', compact('teams') );
  }

  public function show($id){
    $team = Team::find($id);
    return view('teams.show', compact('team') );
  }

  public function create(){
    return view('teams.create');
  }

  public function store(){
    $this->validate(request(), [
      'name' => 'required|min:2',
      'email' => 'required|email|unique:teams',
      'address' => 'required|min:2',
      'city' => 'required|min:2',
    ]);

    Team::create([
      'name' => request('name'),
      'email' => request('email'),
      'address' => request('address'),
      'city' => request('city'),
    ]);

    $teams = Team::all();
    return view('teams.index', compact('teams') );
  }

}
