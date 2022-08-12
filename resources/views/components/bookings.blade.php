<div class="container">
    @auth
        <h2>You can book your date of stay</h2>
    <form class="booking" method="POST" action="/booking/store/{{$post->id}}">
        @csrf
            <div class="form-group">
                <label class="form-label">booked from</label>
                <input type="date" id="todayInput" value="" class="form-control form-input-width" name="booked_at">
            </div>
            <div class="form-group">
                <label class="form-label">booked from</label>
                <input type="date" id="inWeekInput" value="" class="form-control form-input-width" name="booked_to">
            </div>
        <button type="submit" class="btn btn-primary btn-mar date-flex" name="submit">Submit</button>
        </form>

    @else
    <div>
        To book a date you need to be <a href="/login">signed in</a>
    </div>
    @endauth
</div>