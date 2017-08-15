@extends('layouts.master')
@section('content')



<h3 class="blog-post-title">Add new player</h3>
<form method="POST" action="/players/create/">
  {{csrf_field()}}

  <div class="form-group">
    <label for="first_name">First name</label>
    <input type="text" class="form-control" id="first_name"  name="first_name" required>
  </div>
  <div class="form-group">
    <label for="last_name">Last name</label>
    <input type="text" class="form-control" id="last_name"  name="last_name" required>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email"  name="email" required>
  </div>


  <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>

  @include('partials.errors')

</form>

@endsection
