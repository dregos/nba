@extends('layouts.master')

@section('content')

    <h2 class="blog-post-title">{{ $post->title }}</h2>
    <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} by <a href="/users/{{$post->user->id}}">{{ $post->user->name }}</a></p>

    @if(count($post->tags))
      <ul class="list-inline">
        @foreach($post->tags as $tag)
          <li class="list-inline-item">
            <span class="label label-primary"> <a href="/posts/tags/{{$tag->name}}">{{ $tag->name }}</a></span>
          </li>
        @endforeach
      </ul>
    @endif

    <p>{{ $post->content }}</p>


@endsection
