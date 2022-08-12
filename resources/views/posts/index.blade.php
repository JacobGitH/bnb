<x-layout>
    <div class="container index-cintainer">
        <div class="row gx-5">
            @foreach ($posts as $post)
                <div class="col-lg-6 index-card">
                    <div class="index-post-image">
                        <a href="/post/{{$post->id}}">
                             <img class="index-image" src="{{$image ? asset('storage/' . $image->path) : asset('images/blurr.png')}}" alt=""> 
                        </a>
                    </div>
                    <div class="index-post-title"><a href="/post/{{$post->id}}">{{$post->title}}</a></div>
                    <div class="index-post-price"><a href="/post/{{$post->id}}">Price for day: {{$post->price_for_day}} -Kč</a></div>
                    <div class="index-post-location"><a href="/post/{{$post->id}}">Lokace: {{$post->location}}</a></div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>