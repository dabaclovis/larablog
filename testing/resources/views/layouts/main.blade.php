<!doctype html>
<html lang="en">
  <head>
    <title>laravel blog | cloud engineer</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://kit.fontawesome.com/3d9e5fe33e.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark shadow-md bg-dark sticky-top">
        <div class=" container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <h3>PROENGINE</h3>
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class=" nav-item">
                    <a href="{{ url('/') }}" class=" nav-link {{ request()->is('/') ? 'active': '' }}">Home</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </div>
    </nav>
    <main class=" container py-2">
        <div class="row">
            <div class="col-md-9">
                @yield('content')
            </div>
            <div class="col-md-3 w3-card-4">
                <h3 class=" text-center mb-2 card-header">Articles</h3>
                <ul class=" list-group list-group-flush">
                    <a href="" class="list-group-item list-group-item-action w3-card mb-1">Eloquent laravel Crud Application</a>
                    <a href="" class="list-group-item list-group-item-action w3-card mb-1">Query build laravel Crud</a>
                    <a href="" class="list-group-item list-group-item-action w3-card mb-1">Make a github repo public</a>
                    <a href="" class="list-group-item list-group-item-action w3-card mb-1">Install Maven on EC2 Instance</a>
                    <a href="" class="list-group-item list-group-item-action w3-card mb-1">Custom Registration in laravel</a>
                    <a href="" class="list-group-item list-group-item-action w3-card mb-1">Custom Login in laravel</a>
                    <a href="" class="list-group-item list-group-item-action w3-card mb-1">Multi Steps form with livewire and laravel</a>
                </ul>
            </div>
        </div>
    </main>
    <div class=" text-white bg-secondary p-2">
        <div class="container">
            <div class=" d-flex justify-content-center align-content-center w3-bottombar">
                <a href="" class=" btn btn-primary mx-1">About</a>
                <a href="" class=" btn btn-primary mx-1">Contact</a>
                <a href="" class=" btn btn-primary mx-1">Policy</a>
                <a href="" class=" btn btn-primary mx-1 d-none d-md-inline" target="_blank">Docker Registry</a>
                <a href="https://github.com/dabaclovis" class=" btn btn-primary mx-1  d-sm-inline" target="_blank">Github</a>
                <a href="https://linkedin.com/in/dabaclovis" class=" btn btn-primary mx-1 d-none d-md-inline" target="_blank">Linkedin</a>
            </div>
            <div class=" w3-center">
                <div class="">&copy;2022. All Right Reserve.</div>
                <div class="">
                    <a href="{{ url('index') }}" style="text-decoration: none;">thecloudlearners.com</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
