<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title>Posty</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Posty</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
              </li>
              @auth
              <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('posts') }}">Posts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">{{ auth()->user()->name }}</a>
              </li>
              @endauth
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
              </li>
              @auth
              <li class="nav-item">
                <form action="{{route('logout')}}" method="post">
                  @csrf
                  <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Logout</button>
                </form>
              </li>
              @endauth
            </ul>
          </div>
        </div>
      </nav>
  @yield('content')
</body>
</html>
