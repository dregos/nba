@extends('layouts.master')
@section('content')

  <div class="row">


    <div class="col-12">
      <div class="media-body">
        <h2><a href="/teams/{{$player->team->id}}">{{$player->team->name}}</a></h2>
        <h3 class="mt-0 mb-1">
          City: {{$player->team->city}}
        </h3>
      </div>
    </div>
    <hr>
    <div class="col-12">
      <div class="media-body">
        <h2 class="mt-0 mb-1">{{$player->first_name}} {{$player->last_name}}</h2>
        <h3 class="mt-0 mb-1">
          email: {{$player->email}}
        </h3>
      </div>
    </div>

  </div>



  <hr>


@endsection
