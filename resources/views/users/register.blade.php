<x-layout>
    <div class="container">
    <form class="register-form" method="POST" action="/register/user">
        @csrf
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" name="name">
          @error('email')
              <p class="error-message">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control" name="email">
          @error('email')
              <p class="error-message">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" name="password">
        </div>
        <div class="mb-3">
            <label class="form-label">Password confirmation</label>
            <input type="password" class="form-control" name="password_confirmation">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
    </div>
</x-layout>