<x-layout>
    <div class="container">
        <div class="show-wrapper" >
            <div class="show-image-div">
                <img class="index-image" src="{{$image ? asset('storage/' . $image->path) : asset('images/blurr.png')}}" alt="">
            </div>
            <div class="show-info show-info-wrapper">
                <div class="show-title">{{$post->title}}</div>
                <div class="show-location">Location: {{$post->location}}</div>
                <div class="show-price">{{$post->price_for_day}} - Kč</div>
                <div class="show-contact">Telephone: {{$post->contact}}</div>
            </div>
            <div class="show-description-info">
                <div class="show-description">{{$post->description}}</div>
                <div class="show-rules">Rules: {{$post->rules}}</div>
                <div class="show-tags">Tags: {{$post->tags}}</div>
            </div>
        </div>
    </div>

    <x-bookings :post="$post"/>
    <x-comments :post="$post" :comments="$comments"/>
    
</x-layout>
