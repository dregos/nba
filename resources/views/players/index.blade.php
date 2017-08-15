@extends('layouts.master')
@section('content')


  <ul class="list-unstyled">
    @foreach($teams as $team)

      <li class="media">

        <div class="media-body">
          <h2 class="mt-0 mb-1">
            <a href="/teams/{{$team->id}}">{{$team->name}}</a>
          </h2>
          <h3 class="mt-0 mb-1">{{$team->city}}</h3>
          <h3 class="mt-0 mb-1">{{$team->address}}</h3>
        </div>
      </li>

    @endforeach


  </ul>

  

@endsection
