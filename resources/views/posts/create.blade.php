<x-layout>
    <form class="post-create-form" enctype="multipart/form-data" method="POST"  action="/post/store" >
      @csrf
        <input type="hidden"  name="user_id" value="{{auth()->user()->id}}">
        <div class="form-group">
          <label>Post name</label>
          <input type="text" class="form-control" placeholder="Enter post name" name="title" value="{{old('title')}}">
          @error('title')
                  <p class="error-message">{{$message}}</p>
          @enderror
        </div>
        <div class="form-group">
          <label>location</label>
          <input type="text" class="form-control" placeholder="location" name="location" value="{{old('location')}}">
        </div>
        @error('location')
                  <p class="error-message">{{$message}}</p>
        @enderror
        <div class="form-group">
            <label>Conctact</label>
            <input type="text" class="form-control" placeholder="+420 xxx xxx xxx" name="contact" value="{{old('contact')}}">
        </div>
        <div class="form-group">
            <label>Price for night</label>
            <input type="text" class="form-control" placeholder="price for one day" name="price_for_day" value="{{old('price_for_day')}}">
            @error('price_for_day')
                  <p class="error-message">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label>price for servis</label>
            <input type="text" class="form-control" placeholder="price for servis/utilities" name="price_for_servis" value="{{old('name')}}">
            @error('price_for_servis')
                  <p class="error-message">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label>rules</label>
            <input type="text" class="form-control" placeholder="rules" name="rules" value="{{old('rules')}}">
            @error('rules')
                  <p class="error-message">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
          <label>tags</label>
          <input type="text" class="form-control" placeholder="tags" name="tags" value="{{old('tags')}}">
          @error('tags')
                  <p class="error-message">{{$message}}</p>
          @enderror
        </div>
        <div class="form-group">
          <label>email</label>
          <input type="eamil" class="form-control" placeholder="email" name="email" value="{{old('email')}}">
          @error('email')
                <p class="error-message">{{$message}}</p>
          @enderror
        </div>
        <div class="form-group">
          <label >Description</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="add your description..."></textarea>
        </div>
        <div class="form-group">
          <input class="form-control form-m" type="file" name="images[]" multiple>
        </div>
        <button type="submit" class="btn btn-primary form-m">Submit</button>
      </form>
</x-layout>