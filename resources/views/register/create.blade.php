@extends('layouts.master')

@section('content')

    <h2>Register</h2>

    <hr>

    <form method="POST" action="/register">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="title">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirm password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>


    @include('partials.errors')


@endsection
