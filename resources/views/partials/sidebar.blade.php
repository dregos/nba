
<div class="col-sm-3 offset-sm-1 blog-sidebar">
  <div class="sidebar-module sidebar-module-inset">
    <h4>Latest movies</h4>

@if(count($latestMovies)>0)

<ol class="list-unstyled">
    @foreach($latestMovies as $movie)
      <strong><li><a href="/movies/{{$movie->id}}">{{$movie->title}}</a></li></strong>
    @endforeach
</ol>

@endif

</div><!-- /.blog-sidebar -->
