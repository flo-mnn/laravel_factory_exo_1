<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MolenGeek</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item {{(Route::getCurrentRoute()->uri())==='/'? 'active' : ''}}">
              <a class="nav-link" href="/">Building <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{(Route::getCurrentRoute()->uri())==='formations'? 'active' : ''}}">
              <a class="nav-link" href="/formations">Formations</a>
            </li>
            <li class="nav-item {{(Route::getCurrentRoute()->uri())==='formation-types'? 'active' : ''}}">
              <a class="nav-link" href="/formation-types">Formation Types</a>
            </li>
            <li class="nav-item {{(Route::getCurrentRoute()->uri())==='students'? 'active' : ''}}">
              <a class="nav-link" href="/students">Students</a>
            </li>
          </ul>
        </div>
      </nav>
    @yield('content')

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>