<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,100,0,-25" />
        <link rel="stylesheet" href="{{url('styles/main.css')}}">
        <link rel="stylesheet" href="{{url('styles/landing.css')}}">
        <title>Honkai Star Rail</title>
        <link rel="icon" type="image/x-icon" href="{{asset('images/HSRLogo.png')}}">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light navbar-transparent">
            <div class="container">
                <a class="navbar-brand" href="#">Honkai Star Rail</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="video-container text-center">
            <video autoplay loop muted style="width: 100%;">
                <source src="{{asset('videos/hsrbackground.mp4')}}" type="video/mp4">
            </video>
        </div>
        <div class="container">
            <div class="logo-holder">
                <img src="{{asset('images/HSRSoloLogo.png')}}" alt="">  
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container">
                        <div class="text-center">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal">
                                <span class="material-symbols-outlined play-icon">
                                    play_circle
                                </span>
                            </a>

                            <!-- Modal -->
                            <div class="modal fade transparent-modal" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <iframe width="660" height="415" src="https://www.youtube.com/embed/w8vPZrMFiZ4?si=2JElMNeGaeSp_nlG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>