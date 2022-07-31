<x-layout>
    <div class="container">
    <form class="register-form" method="POST" action="/user/register">
        @csrf
        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control" name="email">
          @error('email')
              <p class="error-message">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Password confirmation</label>
            <input type="password_confirmation" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
    </div>
</x-layout>