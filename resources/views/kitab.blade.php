<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kitab</title>

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
            <a1 class="navbar-brand" href="{{ url('/landingPage') }}">KitabSuci</a1>
            <div class="collapse navbar-collapse navText" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto login justify-content-end">
                    <div class="menu d-flex mx-5">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                        <a class="nav-link" aria-current="page"  href="#">Scripture</a>
                        <a class="nav-link" aria-current="page" href="#">Contact</a>
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
            <div class="row landPage my-3">
                <div class="col-sm-3 d-flex flex-column justify-content-center">
                    <div style="max-height:80vh; overflow-y: auto;">
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item d-flex justify-content-between align-items-start ">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Kejadian</div>
                                    50 pasal, 1533 ayat
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start ">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Keluaran</div>
                                    40 pasal, 1213 ayat
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Al-Fatihah</div>
                                    7 ayat
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Al-Fatihah</div>
                                    7 ayat
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Al-Fatihah</div>
                                    7 ayat
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Al-Fatihah</div>
                                    7 ayat
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Al-Fatihah</div>
                                    7 ayat
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Al-Fatihah</div>
                                    7 ayat
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Al-Fatihah</div>
                                    7 ayat
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Al-Fatihah</div>
                                    7 ayat
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Al-Fatihah</div>
                                    7 ayat
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Al-Fatihah</div>
                                    7 ayat
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Al-Fatihah</div>
                                    7 ayat
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Al-Fatihah</div>
                                    7 ayat
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Al-Fatihah</div>
                                    7 ayat
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
                
                <div class="col-sm-9 d-flex flex-column">
                    <div class="row border border-black" style="border-radius: 10px">
                        <div class="text p-3">
                            <h1 style="font-size: 32px;">Kejadian</h1>
                            <p style="font-size: 16px; line-height: 1;">Perjanjian lama</p>
                            <div id="scrollProgressBar" style="width: 100%; height: 10px; background-color: #33D8D8; border-radius:10px"></div>
                        </div>
                    </div>
                    <div class="row my-2 border border-black" style="border-radius: 10px">
                        <div class="col-sm-6 p-2">
                            <h1 style="font-size: 16px">Pasal</h1>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle w-100 d-flex justify-content-between align-items-center" style="background-color: #33D8D8; border: none;" type="button" id="dropdownMenuButtonNumber" data-bs-toggle="dropdown" aria-expanded="false">
                                    1 <!-- Default: Angka 1 -->
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButtonNumber">
                                    <!-- Daftar angka di sini -->
                                    <li><a class="dropdown-item active" href="#content1" data-value="1">1</a></li>
                                    <li><a class="dropdown-item" href="#content2" data-value="2">2</a></li>
                                    <li><a class="dropdown-item" href="#content3" data-value="3">3</a></li>
                                    <li><a class="dropdown-item" href="#content4" data-value="4">4</a></li>
                                    <li><a class="dropdown-item" href="#content5" data-value="5">5</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 p-2">
                            <h1 style="font-size: 16px">Ayat</h1>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle w-100 d-flex justify-content-between align-items-center" style="background-color: #33D8D8; border: none;" type="button" id="dropdownMenuButtonNumber" type="button" id="dropdownMenuButtonText" data-bs-toggle="dropdown" aria-expanded="false">
                                    1<!-- Default: Angka 1 -->
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonText">
                                    <!-- Daftar angka di sini -->
                                    <li><a class="dropdown-item active" href="#content1" data-value="1">1</a></li>
                                    <li><a class="dropdown-item" href="#content2" data-value="2">2</a></li>
                                    <li><a class="dropdown-item" href="#content3" data-value="3">3</a></li>
                                    <li><a class="dropdown-item" href="#content4" data-value="4">4</a></li>
                                    <li><a class="dropdown-item" href="#content5" data-value="5">5</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="max-height:58vh; overflow-y: auto; padding-right: 10px" id="scrollContainer">
                        
                        <div class="text_kitab p-3 border border-black" style="border-radius: 10px" id="content1"> 
                            <h1 style="font-size: 32px;">1</h1>
                            <p style="font-size: 16px; line-height: 1;">Pada mulanya Allah menciptakan langit dan bumi.</p>
                        </div>
                        <div class="text_kitab p-3 my-2 border border-black" style="border-radius: 10px" id="content2">
                            <h1 style="font-size: 32px;">2</h1>
                            <p style="font-size: 16px; line-height: 1;">Bumi belum berbentuk dan kosong; gelap gulita menutupi samudera raya, dan Roh Allah melayang-layang di atas permukaan air.</p>
                        </div>
                        <div class="text_kitab p-3 my-2 border border-black" style="border-radius: 10px" id="content3">
                            <h1 style="font-size: 32px;">3</h1>
                            <p style="font-size: 16px; line-height: 1;">Berfirmanlah Allah: "Jadilah terang." Lalu terang itu jadi.</p>
                        </div>
                        <div class="text_kitab p-3 my-2 border border-black" style="border-radius: 10px" id="content4">
                            <h1 style="font-size: 32px;">4</h1>
                            <p style="font-size: 16px; line-height: 1;">Allah melihat bahwa terang itu baik, lalu dipisahkan-Nyalah terang itu dari gelap.</p>
                        </div>
                        <div class="text_kitab p-3 my-2 border border-black" style="border-radius: 10px" id="content5">
                            <h1 style="font-size: 32px;">5</h1>
                            <p style="font-size: 16px; line-height: 1;">Dan Allah menamai terang itu siang, dan gelap itu malam. Jadilah petang dan jadilah pagi, itulah hari pertama.</p>
                        </div>
                        <div class="text_kitab p-3 my-2 border border-black" style="border-radius: 10px">
                            <h1 style="font-size: 32px;">6</h1>
                            <p style="font-size: 16px; line-height: 1;">Berfirmanlah Allah: "Jadilah cakrawala di tengah segala air untuk memisahkan air dari air."</p>
                        </div>
                        <div class="text_kitab p-3 my-2 border border-black" style="border-radius: 10px" id="content7">
                            <h1 style="font-size: 32px;">7</h1>
                            <p style="font-size: 16px; line-height: 1;">Maka Allah menjadikan cakrawala dan Ia memisahkan air yang ada di bawah cakrawala itu dari air yang ada di atasnya. Dan jadilah demikian.</p>
                        </div>
                    </div>
                </div>
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
        // Mendapatkan semua item dropdown number dan text
        const dropdownItems = document.querySelectorAll('.dropdown-item');

        // Mendapatkan button dropdown number dan text
        const dropdownMenuButtonNumber = document.getElementById('dropdownMenuButtonNumber');
        const dropdownMenuButtonText = document.getElementById('dropdownMenuButtonText');

        // Memperbarui teks pada tombol toggle berdasarkan item yang dipilih
        dropdownItems.forEach(item => {
            item.addEventListener('click', function() {
                const selectedValue = this.getAttribute('data-value');
                
                if (this.closest('.dropdown-menu').id === 'dropdownMenuButtonNumber') {
                    dropdownMenuButtonNumber.innerHTML = selectedValue;
                } else {
                    dropdownMenuButtonText.innerHTML = selectedValue;
                }
                });
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
        const scrollContainer = document.getElementById("scrollContainer");
        const scrollProgressBar = document.getElementById("scrollProgressBar");

        scrollContainer.addEventListener("scroll", function() {
            const scrollTop = this.scrollTop;
            const scrollHeight = this.scrollHeight - this.clientHeight;
            const progress = (scrollTop / scrollHeight) * 100;
            scrollProgressBar.style.width = progress + "%";
            });
        });
    </script>
    
</body>
</html>