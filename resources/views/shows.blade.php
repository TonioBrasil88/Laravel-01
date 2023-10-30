<!doctype html>
<html lang="en" data-bs-theme=dark>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shows</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about-us">About Us</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/where">Where</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/movies">Movies</a></li>
                            <li><a class="dropdown-item" href="#">Shows</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Fine Navbar -->

    <!-- Titolone -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-4">
                <img src="/img/TvSeries.png" class="img-responsive" alt="...">
            </div>
        </div>
    </div>
    <!-- Fine Titolone -->

    <!-- Card delle Serie -->
    <div class="row bg-light">
        @foreach ($series as $serie)
            <div class="col-4 mt-5 d-flex justify-content-center">
                <div class="card border-0" style="width: 18rem;">
                    <img src=" {{ $serie['img'] }} " class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column aligne-item-center">
                        <h5 class="card-title text-truncate text-center"> {{ $serie['title'] }}</h5>
                        <p class="card-text text-truncate">{{ $serie['description'] }} </p>
                        <a href="#" class="btn btn-primary">Guarda ora</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- Fine Card delle Serie -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>


</body>


</html>
