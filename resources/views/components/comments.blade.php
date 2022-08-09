<div class="container">
    @auth
    <div class="show-commment-wrapper">
        <form class="form-def" method="POST" action="/comments/store/{{$post->id}}">
            @csrf
            <div class="form-group">
              <label class="form-label">Comments</label>
              <textarea class="form-control" rows="3" name="comment"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-mar" name="submit">Submit</button>
        </form>   
    @else
        <div><p>You can comment only if you are <a href="/login">signed in</a></p></div>
    @endauth
    <div class="spacer"></div>

    
    
    <div class="commnets-disply">
        @foreach ($comments as $comment)
        <p>{{$comment->user_name}}</p><br>
        <p>{{$comment->comment}}</p><br>
        @endforeach
    </div>

</div>
    


</div>