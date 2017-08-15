@extends('layouts.master')
@section('content')



<h3 class="blog-post-title">Add new team</h3>
<form method="POST" action="/teams/create">
  {{csrf_field()}}

  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name"  name="name" required>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email"  name="email" required>
  </div>
  <div class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control" id="city"  name="city" required>
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address"  name="address" required>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>

  @include('partials.errors')

</form>

@endsection
