<div class="container">
    @auth
    <div class="show-comment-wrapper">
        <form class="form-def" method="POST" action="/comments/store/{{$post->id}}">
            @csrf
            <div class="form-group">
              <label class="form-label">Add your comments</label>
              <textarea class="form-control comment-textarea" rows="3" name="comment" placeholder="add your comments..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-mar" name="submit">Submit</button>
        </form>   
    @else
        <div><p>You can comment only if you are <a href="/login">signed in</a></p></div>
    @endauth
    <div class="spacer"></div>

    
    
    
    @foreach ($comments as $comment)
    <div class="comments-display">
        <div class="comment-user-name">{{$comment->user_name}}:</div>
        <div class="comment-user-comment">{{$comment->comment}}</div>
    </div>
    @endforeach
    

</div>
    


</div>