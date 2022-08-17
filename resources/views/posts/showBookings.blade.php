<x-layout>
    
    <div class="container">
     @foreach ($bookings as $key => $item)
        <div class="row col-user">
            <div class="col-md-4">
                <a href="/post/{{$key}}">show post</a>
            </div>
            <div class="col-md-4 ">
              <a href="/posts/user/edit/" class="button-to-text">Booked from: {{$item[0]}}</a> 
            </div>
            <div class="col-md-4">
                <a href="/posts/user/edit/" class="button-to-text">Booked to: {{end($item)}}</a> 
              </div>
          </div>
    @endforeach 
    </div>
</x-layout>
