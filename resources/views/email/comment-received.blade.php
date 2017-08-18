<p> Hello {{ $team->name}} </p>
<p> You have a new comment on your site
  <a href="{{ url('teams/'.$team->id)}}">
    Check it out.
  </a>
</p>
