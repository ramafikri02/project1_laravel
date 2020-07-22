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
                <a class="navbar-brand" href="#">My Profile</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="experience">Experience</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="portofolio">Portofolio</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <section id="showcase">
        <div class="container">
            <div class="sub-profile">
                <img class="img-profile" src="{!! asset('img/profile.png') !!}">
                <h3 class="text-title">Muhammad Ramadhan Fikri</h3>
                <p>SMK Taruna Bhakti | XII - RPL 2 | Web Developer</p>
            </div>
            <hr>
            <div class="profile">
                <p>
                    Nama Panggilan : Fikri <br>
                    Ttl : Depok, 5 Desember 2002 <br>
                    Alamat : Perum. Puspa Raya blok EG No 22 rt/rw : 03/12, Kecamatan Bojong Gede, <br>
                    Kelurahan Bojong Baru, Kab. Bogor Jawa Barat <br>
                    Agama : Islam <br>
                    Hobi : - <br>
                    Motto Hidup : -
                </p>
            </div>
            <div class="profile">
                <p>
                    Riwayat Sekolah : <br>
                    TK : Roudatul Ulum <br>
                    SD : SDN Bambu Kuning <br>
                    SMP : SMPN 3 Cibinong <br>
                    SMK : SMK Taruna Bhakti depok <br>
                </p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p class="content-footer"> Copyright &copy; M.Ramadhan Fikri </p>
    </footer>
</body>

</html>