@extends('layouts.master')
@section('content')


  <div class="row">

    <div class="col">

      <div class="col-12">
        <div class="media-body">
          <h2 class="mt-0 mb-1">{{$team->name}}</h2>
          <span class="mt-0 mb-1">
            City: {{$team->city}}
          </span>
          <span class="mt-0 mb-1">
            Address: {{$team->address}}
          </span>
        </div>
      </div>

      <hr>


      @include('partials.players')

      <hr>

      @include('partials.comments')
    </div>

    <div class="col">
      @include('partials.sidebar')
    </div>

  </div>

@endsection
