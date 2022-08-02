<x-layout>
    <form class="post-create-form" method="POST" action="/post/store">
        <div class="form-group">
          <label>Post name</label>
          <input type="text" class="form-control" placeholder="Enter post name">
        </div>
        <div class="form-group">
          <label>location</label>
          <input type="text" class="form-control" placeholder="location">
        </div>
        <div class="form-group">
            <label>Conctact</label>
            <input type="text" class="form-control" placeholder="+420 xxx xxx xxx">
        </div>
        <div class="form-group">
            <label>Price for night</label>
            <input type="text" class="form-control" placeholder="price for one day">
        </div>
        <div class="form-group">
            <label>price for servis</label>
            <input type="text" class="form-control" placeholder="price for servis/utilities">
        </div>
        <div class="form-group">
            <label>rules</label>
            <input type="text" class="form-control" placeholder="rules">
        </div>
        <div class="form-group">
          <label >Description</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-mar">Submit</button>
      </form>
</x-layout>