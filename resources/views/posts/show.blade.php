<x-layout>
    <div class="container">
        <div class="show-wrapper" >
            <div class="show-image-div">
                <img class="index-image" src="{{$image ? asset('storage/' . $image->path) : asset('images/blurr.png')}}" alt="">
            </div>
            <div class="show-info show-info-wrapper">
                <div class="show-title">{{$post->title}}</div>
                <div class="show-location">{{$post->location}}</div>
                <div class="show-price">{{$post->price_for_day}}</div>
                <div class="show-contact">{{$post->contact}}</div>
            </div>
            <div class="show-description-info">
                <div class="show-description">{{$post->description}}</div>
                <div class="show-rules">{{$post->rules}}</div>
                <div class="show-tags">{{$post->tags}}</div>
            </div>
        </div>
    </div>

    {{-- under-show comp --}}
    <x-bookings :post="$post"/>
    <x-comments :post="$post" :comments="$comments"/>
    
</x-layout>
