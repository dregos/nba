@extends('layouts.master')
@section('content')

  <div class="row">


    <div class="col-12">
      <div class="media-body">
        <h2 class="mt-0 mb-1">{{$team->name}}</h2>
        <h3 class="mt-0 mb-1">
          City: {{$team->city}}
        </h3>
        <h3 class="mt-0 mb-1">
          Address: {{$team->address}}
        </h3>
      </div>
    </div>


  </div>

  <hr>


  @include('partials.players')

  <hr>

  @include('partials.comments')

@endsection
