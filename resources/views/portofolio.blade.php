<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body class="body">
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="#">My Portofolio</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="experience">Experience</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Portofolio</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <section class="portfolio mt-5" id="portfolio">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-center">
                    <h2 class="text-title">Portofolio</h2>
                    <hr>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="{!! asset('img/por1.png') !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Absensi Kegiatan</h5>
                            <p class="card-text">Pada saat StarBhak Day saya dan tim saya membuat sebuah web absensi kegiatan sekolah</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="{!! asset('img/sm1.png') !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Starbhak Mart</h5>
                            <p class="card-text">Di uji level semester 1 tahap 2saya membuat aplikasi Starbhak Mart yang di dalamnya terdapat penjualan.</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="{!! asset('img/soto1.png  ') !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Aplikasi Dekstop Penjualan Soto</h5>
                            <p class="card-text">Pada saat uji level semester 2 mata pelajaran PBO di kelas 11 kami diberi tugas untuk membuat sebuah aplikasi dekstop penjualan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        Copyright &copy; M.Ramadhan Fikri
    </footer>
</body>

</html>