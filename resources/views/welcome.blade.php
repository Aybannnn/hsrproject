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
    <div class="holder">
        <section>
            <div class="video-container">
                <video autoplay loop muted style="width: 100%;">
                    <source src="{{asset('videos/hsrbackground.mp4')}}" type="video/mp4">
                </video>
            </div>
        </section>
        <section>
            <h1>Travel News</h1>
        </section>
        <section>
            <h1>Guide</h1>
        </section>
        <section>
            <h1>And Tips</h1>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{url('script/script.js')}}"></script>
    </body>
</html>