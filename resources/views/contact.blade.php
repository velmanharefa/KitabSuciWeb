<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('./style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Styles -->
    <style>
    </style>
</head>
<body>
    <section class="header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom">
            <div class="container">
            <a class="navbar-brand" href="{{ url('/landingPage') }}">Kitab<span style="color: #33D8D8; font-weight:600">Suci</span></a>
            <div class="collapse navbar-collapse navText" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto login justify-content-end">
                    <div class="menu d-flex mx-5">
                        <a class="nav-link" aria-current="page" href="{{ url('/landingPage') }}">Home</a>
                        <a class="nav-link" aria-current="page"  href="{{ url('/kitab') }}">Scripture</a>
                        <a class="nav-link" aria-current="page"  href="{{ url('/favorite') }}">Favorite</a>
                        <a class="nav-link" aria-current="page" href="{{ url('/contact') }}">Contact</a>
                    </div>
                    <input class="form-control search w-25" type="text" name="search" id="search" placeholder="Search">
                    <a class="border buttonLgn btn btn-primary mx-3" style="color: #FFFFFF" href="{{ url('/login') }}">Login</a>
                </div>
            </div>
            </div>
        </nav> 
    </section>  

    <section class="content">
        <div class="container">
            <div class="row my-5 justify-content-center">
                <h1 style="text-align: center">
                    Hello Kami dari Kitab Suci 👋
                </h1>
                <img src="./images/toleran.png" alt="" style="width: 450px; height: 382px">
                <a class="my-3" style="text-align: center; text-decoration:none;">
                    Aplikasi ini dikembangkan atas keinginan tim Kitab Suci untuk menyatukan semua kitab suci agama yang ada di Indonesia menjadi satu aplikasi yang user-friendly dan dapat diakses dengan mudah kapan saja. Kami mengucapkan terima kasih kepada semua pihak yang turut serta dalam pembuatan aplikasi ini sehingga dapat berfungsi dengan baik. Tim Kitab Suci berkomitmen untuk terus mengembangkan dan memperbarui aplikasi agar tetap relevan dan nyaman digunakan. Terima kasih 🙏.
                </a>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="footer-content">
            <hr />
            <p style="text-align: center">&copy; Copyright KitabSuci. Made by Kelompok 7 ABP</p>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>