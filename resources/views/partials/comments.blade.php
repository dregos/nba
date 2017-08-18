<h5>Comments</h5>

@foreach($team->comments as $comment)
    <li>
        <strong>{{ $comment->body }}</strong>
        ({{ $comment->created_at->diffForHumans() }})
    </li>
@endforeach

<hr>

<form method="POST" action="/teams/{{ $team->id }}/comment">

    {{ csrf_field() }}

    <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" id="body" name="body"></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>
