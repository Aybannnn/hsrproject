<!DOCTYPE html>
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
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="#" class="nav-link active">Home</a>
            <a href="#" class="nav-link">News</a>
            <a href="#" class="nav-link">Characters</a>
            <a href="#" class="nav-link">Worlds</a>
            <a href="#" class="nav-link">More</a>
        </nav>
    </header>
    <main id="content">
        <div class="holder">
            <section class="one">
                <h1>First Page</h1>
            </section>

            <section class="two">
                <h1>Second Page</h1>
            </section>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{url('script/script.js')}}"></script>
</body>
</html>
