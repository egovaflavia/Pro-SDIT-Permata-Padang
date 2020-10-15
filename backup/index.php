<?php
include "config/koneksi.php";
include "config/fungsi_indotgl.php";
session_start();
?>
<?php
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


error_reporting(0);
$contact = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM contact"));
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from patchwork.theme-summit.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Apr 2018 01:40:28 GMT -->

<head>
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
    <!-- CSS links -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/aos.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/colors/blue.css">
    <!-- Font Family and Favicon-->
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,700,800%7CPoppins:300,400,700" rel="stylesheet">
    <link rel="shortcut icon" href="img/assets/logo1.png">
    <!-- Title -->
    <title>SD IT PERMATA PADANG</title>

    <script>
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
    </script>

</head>

<body>
    <!-- Preloader -->
    <div id="loader">
        <div class="laoder-frame">
            <img class="svg-loader" src="img/assets/loader.svg" alt="circle-loader">
        </div>
    </div>
    <div class="homepage">
        <nav class="navbar navbar-head navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>
                    <a class="navbar-brand logo-white" href="index.html"><img src="img/assets/logo1.png" alt="logo-white"></a>
                    <a class="navbar-brand logo-dark" href="index.html"><img src="img/assets/logo1.png" alt="logo-dark"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="local-scroll" href="?module=home">HOME</a></li>
                        <li class="dropdown"><a href="elements.html" data-toggle="dropdown" class="dropdown-toggle">PROFIL SEKOLAH<b class="caret"></b></a>

                            <ul class="dropdown-menu">
                                <li><a href="?module=sambutan">SAMBUTAN</a></li>
                                <li><a href="?module=struktur">STRUKTUR</a></li>
                                <li><a href="?module=visimisi">VISI & MISI</a></li>
                                <li><a href="?module=sarana">SARANA PRASARANA</a></li>
                            </ul>
                        </li>

                        <li class="dropdown"><a href="elements.html" data-toggle="dropdown" class="dropdown-toggle">PENDIDIKAN<b class="caret"></b></a>

                            <ul class="dropdown-menu">
                                <li><a href="?module=instrakulikuler">INTRAKURIKULER</a></li>
                                <li><a href="?module=ekstrakulikuler">EKSTRAKURIKULER</a></li>
                                <li><a href="?module=kurikulum">KURIKULUM</a></li>
                                <li><a href="?module=prestasi">PRESTASI</a></li>
                                <li><a href="?module=akreditasi">AKREDITASI</a></li>
                            </ul>
                        </li>

                        <li><a href="?module=berita">BERITA</a></li>

                        <li class="dropdown"><a href="elements.html" data-toggle="dropdown" class="dropdown-toggle">AGENDA SEKOLAH<b class="caret"></b></a>

                            <ul class="dropdown-menu">
                                <li><a href="?module=agenda">AGENDA SEKOLAH</a></li>
                                <li><a href="?module=guru">GURU</a></li>
                                <li><a href="?module=siswa">SISWA</a></li>
                                <li><a href="?module=alumni">ALUMNI</a></li>
                                <li><a href="?module=galery">GALERY</a></li>
                                <li><a href="?module=video">VIDEO</a></li>
                            </ul>
                        </li>

                        <li><a href="?module=psb">PSB</a></li>

                        <!--<li><a href="?module=konfirmasi_pesanan" >KONFIRMASI PEMBAYARAN</a></li>-->
                        <li><a href="?module=kontak">KONTAK</a></li>

                        <!--<li><a href="?module=login_p">LOGIN</a></li>-->

                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>


        <?php
        include "content.php";
        ?>

        <!-- Footer -->
        <footer>
            <div class="container ">
                <div class="row">
                    <aside class="col-md-12 text-center" data-aos="fade-up" data-aos-delay="0">
                        <h4 class="text-light">SD IT PERMATA PADANG</h4>
                        <hr>
                        <ul class="list-inline footer-social">
                            <li><a href="#"><span class="ion-social-twitter"></span></a></li>
                            <li><a href="#"><span class="ion-social-facebook"></span></a></li>
                            <li><a href="#"><span class="ion-social-googleplus"></span></a></li>
                            <li><a href="#"><span class="ion-social-linkedin"></span></a></li>
                            <li><a href="#"><span class="ion-social-youtube"></span></a></li>
                            <li><a href="#"><span class="ion-social-pinterest"></span></a></li>
                            <li><a href="#"><span class="ion-social-instagram"></span></a></li>
                        </ul>
                    </aside>
                </div>
            </div>
            <div id="copyright" data-aos="fade" data-aos-delay="0">
                <div class="container">
                    <div class="row text-center">
                        <a href="#" target="_blank">&copy; SD IT PERMATA PADANG - 2019</a>
                        <p>MEDIATAMA WEB INDONESIA</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="js/plugins.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyAC0h0f0HXUzD3JGdO0SOEyJl22aNxAm1g"></script>
    <script src="js/main1f63.js?_=jdu878d7"></script>
</body>


<!-- Mirrored from patchwork.theme-summit.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Apr 2018 01:40:39 GMT -->

</html>