@extends('layouts.master')

@section('content')

    <h2 class="blog-post-title">{{ $post->title }}</h2>
    <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} by <a href="/users/{{$post->user->id}}">{{ $post->user->name }}</a></p>

    @if(count($post->teams))
      <ul class="list-inline">
        @foreach($post->teams as $team)
          <li class="list-inline-item">
            <span class="label label-primary"> <a href="/news/teams/{{$team->name}}">{{ $team->name }}</a></span>
          </li>
        @endforeach
      </ul>
    @endif

    <p>{{ $post->content }}</p>

  

@endsection
