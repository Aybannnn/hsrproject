<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{url('styles/main.css')}}">
    <link rel="stylesheet" href="{{url('styles/landing.css')}}">
    <title>Honkai Star Rail</title>
    <link rel="icon" type="image/x-icon" href="{{asset('images/HSRLogo.png')}}">
    <style>
        .nav-link {
            position: relative;
            display: inline-block;
            padding-bottom: 5px; /* Space for the image */
        }

        .nav-link.active::after {
            content: "";
            position: absolute;
            bottom: -7rem;
            left: 50%;
            transform: translateX(-50%);
            width: 200px; /* Image width */
            height: 200px; /* Image height */
            background-image: url('images/activeDesign.png'); /* Path to your image */
            background-repeat: no-repeat;
            background-position: center;
            cursor: default;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="#home" class="nav-link active">Home</a>
            <a href="#news" class="nav-link">News</a>
            <a href="#characters" class="nav-link">Character</a>
            <a href="#worlds" class="nav-link">Worlds</a>
            <a href="#more" class="nav-link">More</a>
        </nav>
    </header>
    <main>
        <section id="home" style="position: relative;">
            <div class="spacer">
                <span class="material-symbols-outlined">
                    tune
                </span>
                <h1><a href="www.youtube.com" style="text-decoration: none; color: gold;">Download Now</a></h1>
            </div>
            <div class="video-container">
                <video autoplay loop muted style="width: 100%;">
                    <source src="{{asset('videos/hsrbackground.mp4')}}" type="video/mp4">
                </video>
            </div>
            <div class="spacer"></div>
            <div class="logo-holder">
                <img src="{{asset('images/HSRSoloLogo.png')}}">
            </div>
            <h1>Update 2</h1>
        </section>

        <section id="news">News</section>
        <section id="characters">Characters</section>
        <section id="worlds">Worlds</section>
        <section id="more">More</section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{url('script/script.js')}}"></script>
</body>
</html>
