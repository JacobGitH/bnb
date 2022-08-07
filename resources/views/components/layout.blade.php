<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
    <title>Brnobnb</title>
</head>
<body>
       <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">BrnoBnb</a>
          <div class="login">
            @auth
            <form action="/logout" method="POST">
              @csrf
              <button class="logout-a nav-link" type='submit'><i class="fa-solid fa-arrow-right-from-bracket"></i>Log out</button>
            </form>
            @else
              <a href="/login" class="login-a"><i class="fa-solid fa-arrow-right-to-bracket"></i>Log in</a>
              <a href="/register" class="register-a"><i class="fa-solid fa-user-pen"></i></i>Register</a>
            @endauth
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon" ></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title"><a href="/" class="a-cus">BrnoBnb</a></h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active a-cus" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link a-cus" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link a-cus" href="#">Link</a>
                </li>
                @auth
                <li class="nav-item">
                  <a class="nav-link a-cus" href="/post/create">Create post</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link a-cus" href="/post/user">Show my posts</a>
                </li>
                @endauth
              </ul>
              <form class="d-flex"action="/">
                <input class="form-control me-2" type="text" placeholder="Search" name="search">
                <button class="btn btn-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </div>
      </nav> 

    {{$slot}}

      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>