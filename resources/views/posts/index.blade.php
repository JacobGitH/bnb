<x-layout>
    <div class="container">
        <div class="row gx-5">
            @foreach ($posts as $post)
                <div class="col-lg-6 index-card">
                    <div class="index-post-image"><a href="/post/{{$post->id}}"></a></div>
                    <div class="index-post-title"><a href="/post/{{$post->id}}">{{$post->title}}</a></div>
                    <div class="index-post-price"><a href="/post/{{$post->id}}">{{$post->price_for_day}}</a></div>
                    <div class="index-post-location"><a href="/post/{{$post->id}}">{{$post->location}}</a></div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>