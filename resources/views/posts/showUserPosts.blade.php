<x-layout>
    <div class="container">
        @foreach ($posts as $post)
        <div class="row">
            <div class="col-md-8">
                {{$post->title}}
            </div>
            <div class="col-md-2 col-user">
              <a href="/posts/user/edit/{{$post->id}}" class="button-to-text"><i class="fa-solid fa-pencil "></i>Edit</a> 
            </div>
            <div class="col-md-2">
              <form action="/posts/user/delete/{{$post->id}}" method="POST">
                  @csrf
                  @method('DELETE')
                <button type="submit" class="button-to-text"><i class="fa-solid fa-trash"></i>Delete</button></form>
            </div>
          </div>
          @endforeach
    </div>
</x-layout>