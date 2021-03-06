@extends('layouts.master')

@section('content')

    <h2>Create post</h2>

    <hr>

    <form method="POST" action="/news">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
            <label for="content">Body</label>
            <textarea class="form-control" id="content" name="content"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <div class="form-group">
            <label for="teams[]">Teams relating</label>
            @foreach($teams as $team)
              <div class="checkbox">
                <label><input type="checkbox" name="teams[]" id="teams" value="{{$team->id}}">{{$team->name}}</label>
              </div>
            @endforeach
        </div>

    </form>


    @if (count($errors->all()) > 0)

        @foreach($errors->all() as $error)
            <div class="form-group">
                <div class="alert alert-danger">
                    <li>{{ $error }}</li>
                </div>
            </div>
        @endforeach

    @endif


@endsection
