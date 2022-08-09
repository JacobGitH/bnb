<x-layout>
    <div class="container">
        <div class="show-wrapper" >
            <div class="show-image-div"><img class="show-image" src="{{$image ? asset('storage/' . $image->path) : asset('images/blurr.png')}}" alt=""></div>
            <div class="show-info"></div>
            <div class="show-description"></div>
        </div>
    </div>

    {{-- under-show comp --}}
    <x-bookings :post="$post"/>
    <x-comments :post="$post" :comments="$comments"/>
    
</x-layout>
