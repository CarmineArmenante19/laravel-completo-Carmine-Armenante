<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    {{-- CSS custom --}}
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('prodotti')}}">Prodotti</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    {{-- End navbar --}}

    {{-- Main --}}
    {{-- section --}}
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 mt-5">
                <h1 class="display-1">{{$title}}</h1>
                <h3>{{$letterhead}}</h3>
                <button class="btn btn-custom"><a href="{{route('prodotti')}}">{{$button}}</a></button>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center mt-5">
                <div class="div-custom"></div>
            </div>
        </div>
    </div>
    {{-- End main --}}
    {{-- Botstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    {{-- Main js --}}
    <script src="main.js"></script>
  </body>
</html>