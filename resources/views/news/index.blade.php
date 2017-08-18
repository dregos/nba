@extends('layouts.master')

@section('content')
<a class="btn btn-outline-primary" href="/news/create">Add news</a>
<hr>
    @foreach($posts as $post)

        <div class="blog-post">
            <h2 class="blog-post-title"><a href="/news/{{ $post->id }}">{{ $post->title }}</a></h2>
            <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} by <a href="/users/{{$post->user->id}}">@if($post->user){{$post->user->name}}@endif</a></p>

            <p>{{ $post->body }}</p>
        </div><!-- /.blog-post -->

    @endforeach

    <nav class="blog-pagination">
        <a class="btn btn-outline-{{ $posts->currentPage() == 1 ? 'secondary disabled' : 'primary' }}"
            href="{{ $posts->previousPageUrl() }}">
          Previous
        </a>
        <a class="btn btn-outline-{{ $posts->hasMorePages() ? 'primary' : 'secondary disabled' }}"
            href="{{$posts->nextPageUrl()}}">
          Next
        </a>
        Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}
    </nav>

@endsection
