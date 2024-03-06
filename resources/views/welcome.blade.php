<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="{{url('styles/main.css')}}">
        <link rel="stylesheet" href="{{url('styles/landing.css')}}">
        <title>Honkai Star Rail</title>
        <link rel="icon" type="image/x-icon" href="{{asset('images/HSRLogo.png')}}">
    </head>
    <body>
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-transparent">
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
        </nav> -->
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
    </body>
</html>