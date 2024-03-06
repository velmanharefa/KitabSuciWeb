<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LoginPage</title>

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

    <section class="login">
        <div class="container border border-danger my-5">
            <div class="row">
                <div class="col-sm-6 border border-danger">
                    <p>
                        Welcome <span>Back Friends!</span> <br>
                        <span2>Jangan lupakan ibadah dengan membaca kitab</span>
                    </p>
                    <div class="textfield">
                        <span class="input-Email">
                            <input class="form-control Email my-3" type="text" name="Email" id="Email" placeholder="Email/username">
                        </span>

                        <span class="input-Email">
                            <input class="form-control Email" type="text" name="Email" id="Email" placeholder="Password">
                        </span>
                    </div>
                    <div class="forgotPass text-end">
                        <a href="#">Forgot Password?</a>
                    </div>
                    <div class="btn">
                        <button class="btn" data-bs-target="#" data-bs-toggle="modal" type="submit" style="background-color: #33D8D8; color: #FFFFFF;">Login</button>
                        <img src="./images/google.png" alt="">
                    </div>


                </div>
                <div class="col-sm-6 border border-danger">
                    <img src="images/loginpic.png" alt="" />
                    <p>“Lebih baik kehilangan sesuatu demi Tuhan. Daripada kehilangan Tuhan demi sesuatu” <br>
                        <span>Mufti Menk</span>
                    </p>
                </div>

            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>