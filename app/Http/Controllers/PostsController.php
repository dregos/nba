<?php

namespace App\Http\Controllers;

use App\Post;
use App\Team;

class PostsController extends Controller
{

  public function __construct(){
    $this->middleware('auth')->except('index', 'show');
  }

  public function index()
  {
      $posts = Post::with('user', 'teams')->latest()->paginate(5);
      \Log::info($posts);

      return view('news.index', ['posts' => $posts]);
  }

  public function show($id)
  {
      $post = Post::with('user', 'teams')->find($id);

      return view('news.show', ['post' => $post]);
  }

  public function create()
  {
      $teams = Team::all();
      return view('news.create', compact('teams'));
  }

  public function store()
  {

      $this->validate(request(), [
          'title' => 'required',
          'content' => 'required'
      ]);

      $post = new Post;
      $post->title = request('title');
      $post->content = request('content');
      $post->user_id = auth()->user()->id;
      $post->save();

      $post->teams()->attach(request('teams'));
      session()->flash('message', "Thank you for publishing article on www.vivify-nba.com.");
      
      return redirect('/news');

  }
}
