<x-layout>

    <div class="container">
        <div class="show-wrapper" >
            <div class="show-image">{{$post->id}}</div>
            <div class="show-info"></div>
            <div class="show-description"></div>
        </div>
    </div>


    <div class="container">
        @auth
            
        
        <form class="booking">
                <div class="form-group">
                    <label class="form-label">booked from</label>
                    <input type="date" id="todayInput" value="" class="form-control form-input-width">
                </div>
                <div class="form-group">
                    <label class="form-label">booked from</label>
                    <input type="date" id="inWeekInput" value="" class="form-control form-input-width">
                </div>

            <button type="submit" class="btn btn-primary btn-mar date-flex" name="submit">Submit</button>
        </form>
        @else
        <div>
            To book a date you need to be <a href="/login">signed in</a>
        </div>
        @endauth
    </div>

    
    <div class="container">
        @auth
        <div class="show-commment-wrapper">
            <form class="form-def" method="POST" action="/comments/store">
                @csrf
                <input type="hidden"  name="user_name" value="{{auth()->user()->name}}">
                <input type="hidden"  name="user_id" value="{{auth()->user()->id}}">
                <input type="hidden"  name="post_id" value="{{$post->id}}">
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
</x-layout>
