<?php
// header('location:page_404.php');
include "config/koneksi.php";
include "config/fungsi_indotgl.php";
session_start();

$ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
$tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
$waktu   = time(); //

// Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini
$s = mysqli_query($con, "SELECT * FROM statistik WHERE ip='$ip' AND tanggal='$tanggal'");

// Kalau belum ada, simpan data user tersebut ke database
if (mysqli_num_rows($s) == 0) {
    mysqli_query($con, "INSERT INTO statistik(ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");
}
// Jika sudah ada, update
else {
    mysqli_query($con, "UPDATE statistik SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");
}


// error_reporting(0);
$contact = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM contact"));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <!-- Dari yang lama -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Open Graph Information -->
    <meta property="og:title" content="PatchWork Template - at Themeforest">
    <meta property="og:description" content="PatchWork is a creative one page HTML template with a clear and easy to navigate design which you can use for any kind of business. Apart from its sleek design, you will also enjoy a variety of features created on the principle of providing you with an elegant eye-catching design. Its cutting-edge design will fascinate visitors at first sight. It is compatible with all major browsers and it is well documented.">
    <meta property="og:site_name" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="theme-summit.com/">
    <meta property="og:image" content="demo/patchfacebook.jpg" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Dari yang baru -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/aos.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" /> -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/colors/blue.css">
    <link rel="icon" href="img/logo.png" type="image/png" /> -->
    <title>Permata Full Day School</title>
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="newStyle/css/bootstrap.css" />
    <link rel="stylesheet" href="newStyle/css/flaticon.css" />
    <link rel="stylesheet" href="newStyle/css/themify-icons.css" />
    <link rel="stylesheet" href="newStyle/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="newStyle/vendors/nice-select/css/nice-select.css" /> -->
    <!-- main css -->
    <!-- <link rel="stylesheet" href="newStyle/css/style.css" /> -->

    <!-- infro dari yang lama -->
    <!-- <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-107833696-1', 'auto');
        ga('send', 'pageview');
    </script> -->

</head>

<body>

    <div class="container">
        <img class="img-fluid" src="img/homeslider/home.jpg" alt="">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd !important;">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" width="100" height="30" alt="" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Berita</a>
                    </li>
                    <li class="nav-item submenu dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="">Sambutan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Struktur</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Visi dan Misi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Sarana dan Prasarana</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pendidikan</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="">Intrakurikuler</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Ekstrakurikuler</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Kurikulum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Prestasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Akreditasi</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tentang</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="">Agenda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Guru</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Siswa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Alumni</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Galeri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Video</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link search" id="search">
                            <i class="ti-search"></i>
                        </a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <div class="row mt-2">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        Kepala Sekolah
                    </div>
                    <div class="card-body">
                        <?php
                        $ck = mysqli_query($con, "SELECT * FROM tenaga_kp WHERE id_tkp = 1")->fetch_assoc();
                        // var_dump($ck);
                        ?>
                        <img src="img/guru/<?= $ck['foto']; ?>" alt="" class="rounded mx-auto d-block img-thumbnail img-fluid">
                        <p>
                            Nama Guru : <?= $ck['nama_guru'] ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Berita Terbaru
                    </div>
                    <div class="card-body">
                        <h2>Heading of articel</h2>
                        <div class="card">
                            <div class="card-body">
                                <img src="img/logo.png" class=" img-fluid" alt="">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        Kepala Sekolah
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="input-group mb-3">

                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                <div class="input-group-prepend">
                                    <button class="btn btn-success input-group ">Cari</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Dari yang lama -->
    <!-- <script src="js/plugins.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyAC0h0f0HXUzD3JGdO0SOEyJl22aNxAm1g"></script>
    <script src="js/main1f63.js?_=jdu878d7"></script> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="js/jquery-3.2.1.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="newStyle/js/popper.js"></script>
    <script src="newStyle/js/bootstrap.min.js"></script>
    <script src="newStyle/vendors/nice-select/js/jquery.nice-select.min.js"></script> -->
    <script src="newStyle/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="newStyle/js/owl-carousel-thumb.min.js"></script>
    <!-- <script src="newStyle/js/jquery.ajaxchimp.min.js"></script>
    <script src="newStyle/js/mail-script.js"></script> -->
    <!--gmaps Js-->
    <!-- <script src="newStyle/js/gmaps.min.js"></script>
    <script src="newStyle/js/theme.js"></script> -->
</body>

</html>