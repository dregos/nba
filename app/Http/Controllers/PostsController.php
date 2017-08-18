<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;

class PostsController extends Controller
{

  public function __construct(){
    $this->middleware('auth')->except('index', 'show');
  }

  public function index()
  {
      $posts = Post::with('user')->latest()->paginate(5);
      \Log::info($posts);

      return view('news.index', ['posts' => $posts]);
  }

  public function show($id)
  {
      $post = Post::find($id);

      return view('news.show', ['post' => $post]);
  }

  public function create()
  {
      return view('news.create');
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

      //$post->users()->attach(request('users'));

      return redirect('/news');

  }
}
