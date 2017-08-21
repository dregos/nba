
<div class="col-sm-12 offset-sm-2 blog-sidebar">
  <div class="sidebar-module sidebar-module-inset">
    <h4>Latest news</h4>

@if(count($team->posts)>0)

<ol class="list-group">
    @foreach($team->posts as $post)
      <li class="list-group-item"><a href="/news/{{$post->id}}">{{$post->title}}</a></li>
    @endforeach
</ol>

@endif

</div><!-- /.blog-sidebar -->
