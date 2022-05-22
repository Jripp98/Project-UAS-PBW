<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>J2 movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="navbar.css">
  </head>
    
    <body>
    <nav class="navbar navbar-expand-sm navbar-light " style="background-color: #00bfff;">
      <div class="container">
    <a class="navbar-brand"><img src="img/J2 movies.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link "href="{{ url('/720p') }}">720p</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"href="{{ url('/1080') }}">1080p</a>
        </li>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link "href="{{ url('/faq') }}">FAQ</a>
        </li>
      </ul>
      <form action="{{ url('/homepage')}}"class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
        @yield('content')   
    </body>
</html>
<style>
    .navbar {
    color: rgb(33, 3, 101);
    padding-top: 0, 75em!important;
}

.navbar-brand {
    font-size: 2em;
    color: rgb(34, 0, 188);
}

.nav-link {
    font-family:Viga ;
    text-transform: uppercase;
    margin-right: 20px;
}

.nav-link:hover::after {
    content: "";
    display: block;
    border-bottom: 1px rgb(188, 0, 0);
    width: 100%;
    margin-top: auto;
}
</style>
