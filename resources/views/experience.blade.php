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
                <a class="navbar-brand" href="#">My Experience</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="home">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Experience</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="portofolio">Portofolio</a>
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
                    <h2 class="text-title">Experience</h2>
                    <hr>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="{!! asset('img/tutor_sebaya.jpeg') !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tutor Sebaya di SMK Taruna Bhakti</h5>
                            <p class="card-text">Saat awal oktober 2018 di SMK Taruna Bhakti terdapat sebuah kegiatan tutor sebaya, saya dan teman-teman saya di ajari oleh kakak kelas untuk membuat sebuah aplikasi android.</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="{!! asset('img/pnj2.jpeg') !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">DSC PNJ 2019</h5>
                            <p class="card-text">Pada tanggal 18 Oktober 2019, saya mengikuti Developer Student Clubs di PNJ tepatnya di Gedung Serbaguna (GSG) PNJ ( Jl. Prof. DR. G.A. Siwabessy, Kukusan, Kecamatan Beji, Kota Depok, Jawa Barat 16424)</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="{!! asset('img/kunjin1.jpeg') !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kunjungan Industri</h5>
                            <p class="card-text">Di kelas 10 ada program yang namanya Kunjungan Industri. Saya beserta kelompok saya bertempat di PT Frisidea. Frisidea merupakan perusahaan teknologi untuk pengembangan perangkat lunak, memberikan berbagai kontrol website, seluler, dan desktop yang digabungkan dengan pendekatan yang berorientasi layanan pada aplikasi.</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="{!! asset('img/dicoding.png') !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Dicoding Web Pemula</h5>
                            <p class="card-text">Saya lulus Pemrograman Web Pemula di Dicoding pada tanggal 30 Agustus 2019.</p>
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