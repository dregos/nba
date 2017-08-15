@if(count($team->players)>0)

  <div class="players-list">
    @foreach($team->players as $player)
      <div class="col-md-12 col-md-offset-0">
        <strong><a href="/players/{{$player->id}}">{{$player->first_name}} {{$player->last_name}}</a></strong>
        <small class="pull-right text-muted">{{$player->email}}</small>
      </div>

    @endforeach

  </div>


@endif
