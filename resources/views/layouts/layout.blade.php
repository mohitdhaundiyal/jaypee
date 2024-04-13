<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>JAYPEE INSTITUTE OF INFORMATION TECHNOLOGY</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
    body {
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }

    .card {
      box-shadow: 0px 0px 10px rgba(46, 54, 68, 0.5);
      border: solid 2px transparent;
      padding: 1rem;
      margin-bottom: 1rem;
      border-radius: 1.5em;
    }

    .card-header {
      background: none;
    }
  </style>

  @livewireStyles
</head>

<body style="background-image: url({{asset('assets/jaypee.jpeg')}});">
  @section('navbar')
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="/assets/logo-jiit.png" alt="Logo" width="30" height="24" class="  img-fluid">
        JIIT
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          @if (Route::has('login'))
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Auth::user()-> name}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('add-details')}}">Add Details</a></li>
              <li>
                <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button class="dropdown-item" type="submit">Logout</button>
                </form>
              </li>
            </ul>
          </li>
          @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Faculty
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" aria-current="page" href="/faculty/register">Register</a>
              </li>
              <li>
                <a class="dropdown-item" aria-current="page" href="/faculty/login">Login</a>
              </li>
            </ul>
          </li>
          @if (!Session::has('admin'))
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Admin
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" aria-current="page" href="/admin/login">Login</a>
              </li>
            </ul>
          </li>
          @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Admin
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" aria-current="page" href="/admin/dashboard">Dashboard</a>
              </li>
              <li>
                <form action="/admin/logout" method="POST">
                  @csrf
                  <button class="dropdown-item" type="submit">Logout</button>
                </form>
              </li>
            </ul>
          </li>
          @endif
          @endauth
          @endif
        </ul>
        </form>
      </div>
    </div>
  </nav>
  @show

  @yield('content')

  @livewireStyles

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</body>

</html>