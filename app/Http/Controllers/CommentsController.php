<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Team;
use App\Mail\CommentReceived;

class CommentsController extends Controller
{

  public function store($id){

    $this->validate(request(), [
      'body' => 'required|min:2'
    ]);

    Comment::create([
      'body' => request('body'),
      'team_id' => $id
    ]);

    $team = Team::find($id);
    \Mail::to($team)->send(new CommentReceived($team));

    return back();

  }
}
