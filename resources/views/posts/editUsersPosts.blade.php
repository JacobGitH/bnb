<x-layout>
    <h2>EDIT</h2>
    <form class="post-create-form" enctype="multipart/form-data" method="POST"  action="/posts/user/edit/{{$post->id}}">
        @csrf
          @method('PUT')
          <div class="form-group">
            <label>Post name</label>
            <input type="text" class="form-control" value="{{$post->title}}" name="title">
          </div>
          <div class="form-group">
            <label>location</label>
            <input type="text" class="form-control" value="{{$post->location}}" name="location">
          </div>
          <div class="form-group">
              <label>Conctact</label>
              <input type="text" class="form-control" value="{{$post->contact}}" name="contact">
          </div>
          <div class="form-group">
              <label>Price for night</label>
              <input type="text" class="form-control" value="{{$post->price_for_day}}" name="price_for_day">
          </div>
          <div class="form-group">
              <label>price for servis</label>
              <input type="text" class="form-control" value="{{$post->price_for_servis}}" name="price_for_servis">
          </div>
          <div class="form-group">
              <label>rules</label>
              <input type="text" class="form-control" value="{{$post->rules}}" name="rules">
          </div>
          <div class="form-group">
            <label >Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$post->description}}</textarea>
          </div>
          <div class="form-group">
            <input class="form-control form-m" type="file" name="images[]" multiple>
          </div>
          <button type="submit" class="btn btn-primary form-m">Submit</button>
        </form>
</x-layout>