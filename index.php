<?php
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


error_reporting(0);
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

  <!-- Dari yang baru -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.min.css">
  <link rel="stylesheet" type="text/css" href="css/aos.css">
  <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/ionicons.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/colors/blue.css">
  <link rel="icon" href="img/logo.png" type="image/png" />
  <title>Permata Full Day School</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="newStyle/css/bootstrap.css" />
  <link rel="stylesheet" href="newStyle/css/flaticon.css" />
  <link rel="stylesheet" href="newStyle/css/themify-icons.css" />
  <link rel="stylesheet" href="newStyle/vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="newStyle/vendors/nice-select/css/nice-select.css" />
  <!-- main css -->
  <link rel="stylesheet" href="newStyle/css/style.css" />

  <!-- infro dari yang lama -->
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
  <!--================ Start Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <div class="search_input" id="search_input_box">
        <div class="container">
          <form class="d-flex justify-content-between" method="" action="">
            <input type="text" class="form-control" id="search_input" placeholder="Search Here" />
            <button type="submit" class="btn"></button>
            <span class="ti-close" id="close_search" title="Close Search"></span>
          </form>
        </div>
      </div>

      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html"><img class="img-fluid" src="newStyle/img/logo-removebg-preview.png" width="150px" alt="" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span> <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="asd">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="asd">Pendaftaran Siswa Baru</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="asd">Berita</a>
              </li>
              <li class="nav-item submenu dropdown">
                <a href="asd" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile</a>
                <ul class="dropdown-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="asd">Sambutan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="asd">Struktur</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="asd">Visi dan Misi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="asd">Sarana dan Prasarana</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pendidikan</a>
                <ul class="dropdown-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="asd">Intrakurikuler</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="asd">Ekstrakurikuler</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="asd">Kurikulum</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="asd">Prestasi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="asd">Akreditasi</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tentang</a>
                <ul class="dropdown-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="asd">Agenda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="asd">Guru</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="asd">Siswa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="asd">Alumni</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="asd">Galeri</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="asd">Video</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="asd">Contact</a>
              </li>
              <li class="nav-item">
                <a href="asd" class="nav-link search" id="search">
                  <i class="ti-search"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================ End Header Menu Area =================-->

  <!--================ Start Home Banner Area =================-->
  <section class="home_banner_area">
    <div class="owl-carousel active_course_single">
      <div class="item">
        <img src="img/homeslider/banner1.png" alt="">
      </div>
      <div class="item">
        <img src="img/homeslider/banner2.png" alt="">
      </div>
    </div>
    </div>
    <div class="banner_inner mt-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="banner_content text-center">
              <!-- <p class="text-uppercase">
                Terakreditasi
              </p> -->
              <!-- <h2 class="text-uppercase mt-4 mb-5">
                SD IT Permata Padang
              </h2> -->
              <div>
                <!-- <a href="#" class="primary-btn2 mb-3 mb-sm-0">Pendaftara Siswa Baru </a> -->
                <!-- <a href="#" class="primary-btn ml-sm-3 ml-0">see course</a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!--================ End Home Banner Area =================-->

  <!--================ Start Feature Area =================-->
  <section class="feature_area section_gap_top">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="main_title">
            <h2 class="mb-3">Visi, Misi, Akreditasi Sekolah</h2>
            <p>
              SD IT Permata Padang
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="single_feature">
                <div>
                  <div class="icon"><span class="flaticon-student"></span></div>
                  <div class="desc">
                    <h4 class="mt-3 mb-2">Visi Sekolah</h4>
                    <p>
                      Menyelenggarakan pendidikan yang terintegrasi,
                      bernuansa Islami dan menyenangkan sehingga menghasilkan
                      anak-anak yang siap menghadapi berbagai tantangan zaman,
                      menjaga lingkungannya dan bermanfaat bagi
                      masyarakat
                    </p>
                  </div>
                </div>

                <div class="mt-5">
                  <div class="icon"><span class="flaticon-book"></span></div>
                  <div class="desc">
                    <h4 class="mt-3 mb-2">Misi Sekolah</h4>
                    <p>
                      <ul>
                        <li>Menjadikan Al-Qur'an dan Assunah Sebagai dasar acuan dari seluruh program</li>
                        <li>Mengembangkan semaksimal mungkin potensi yang ada pada setiap individu dengan segala
                          kelebihan
                          dan
                          kekuranggannya</li>
                        <li>Membantu orang tua menyiapkan anak-anak dalam meghadapi tantangan zaman dengan dasar agama
                          dan
                          kepribadian yang baik</li>
                        <li>Membina kerja sama produktif dengan masyarakat sekitar</li>
                      </ul>
                    </p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-md-4">
          <div class="single_feature">
            <div class="icon"><span class="flaticon-earth"></span></div>
            <div class="desc">
              <h4 class="mt-3 mb-2">Akreditasi Sekolah</h4>
              <p class="sample-text">
                Berdasarkan Data Kementrian Pendidikan dan Kebudayaan dengan <br> <b>No. SK. Akreditasi</b> : <br>
                851/BAP-SM/LL/X/2015 <br>
                SD IT Permata Padang <b>Terakreditasi B</b> <br>
                <a href="https://referensi.data.kemdikbud.go.id/tabs.php?npsn=10310830">Selengkapnya Klik Disini</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Feature Area =================-->

  <!--================ Start Popular Courses Area =================-->
  <div class="popular_courses">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="main_title">
            <h2 class="mb-3">Berita Terkini</h2>
            <p>
              Menyajikan berita seputar SD IT Permata Padang
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single course -->
        <div class="col-lg-12">
          <div class="owl-carousel active_course">

            <!-- Awal Perulangan -->
            <?php
            $sql = mysqli_query($con, "SELECT * FROM berita ORDER BY id_berita DESC LIMIT 4");
            while ($data = mysqli_fetch_assoc($sql)) {
              $isi = substr($data['isi_berita'], 0, 50);
              $judulberita = substr($data['judul_berita'], 0, 16) . "...";
              // var_dump($data);
            ?>
              <div class="single_course">
                <div class="course_head">
                  <img style="height: 230px;" class="img-fluid" src="img/berita/<?= $data['gambar'] ?>" alt="No Image" />
                </div>
                <div class="course_content">
                  <span class="tag mb-4 d-inline-block"><?= tgl_indo($data['tgl_post']) ?></span>
                  <h4 class="mb-3">
                    <a href="asd"><?= $data['judul_berita'] ?></a>
                  </h4>
                  <p>
                    <?= $isi ?> ....
                  </p>
                  <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                    <a href="asd" class="btn btn-primary">Selengkapnya</a>
                  </div>
                </div>
              </div>
            <?php } ?>
            <!-- Akhir Perulangan -->

          </div>
        </div>
      </div>

      <a href="asd" class="btn btn-primary">Semua Berita</a>
    </div>
  </div>
  <!--================ End Popular Courses Area =================-->

  <!--================ Start Registration Area =================-->
  <div class="section_gap registration_area">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <div class="row clock_sec clockdiv" id="clockdiv">
            <div class="col-lg-12">
              <h1 class="mb-3">Siswa SD IT Permata Padang</h1>
              <p>
                Rincian Jumlah Siswa Pada Tahun pelajaran 2019/2020
              </p>
            </div>
            <div class="col clockinner1 clockinner">
              <h1 class="days">150</h1> <br>
              <span class="smalltext">Siswa Laki-laki </span>
            </div>
            <div class="col clockinner clockinner1">
              <h1 class="hours">23</h1> <br>
              <span class="smalltext">Siswa Perempuan</span>
            </div>
            <div class="col clockinner clockinner1">
              <h1 class="minutes">47</h1> <br>
              <span class="smalltext">Total Siswa</span>
            </div>
            <div class="col clockinner clockinner1">
              <h1 class="seconds">2019/2020</h1> <br>
              <span class="smalltext">Tahun Ajaran</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 offset-lg-1">
          <div class="register_form">
            <h3>Detail SD IT Permata Padang</h3>
            <p class="text-left mt-3">
              <b>Rombongan Belajar</b> : <br> 12 Rombongan
              <br>
              <b>Kurikulum</b> : <br> KTSP 2006 dan Kurikulum 2013
              <br>
              <b>Penyelenggaraan</b> : <br> Sehari Penuh/5 Hari
              <br>
              <b>Rasio Siswa Rombel</b> : <br> 25.83
              <br>
              <b>Rasio Siswa Guru</b> : <br> 14.76
              <br>
              <b>Ruang Kelas</b> : <br> 12 Ruangan
              <br>
              <b>Laboratorium</b> : <br> 1 Ruangan
              <br>
              <b>Perpustakaan</b> : <br> 1 Ruangan
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================ End Registration Area =================-->

  <!--================ Start Trainers Area =================-->
  <section class="trainer_area section_gap_top">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="main_title">
            <h2 class="mb-3">Agenda</h2>
            <p>
              Agenda Sekolah, SD IT Permata Padang
            </p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center d-flex align-items-center">
        <!-- Awal Perulangan  -->
        <?php
        $sql = mysqli_query($con, "SELECT * FROM agenda ORDER BY id_agenda DESC");
        while ($data = mysqli_fetch_assoc($sql)) {
          $isi = substr($data['isi_agenda'], 0, 200);
          // var_dump($data);
        ?>
          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              <img style="width:100%; height: 200px;" class="img-fluid" src="img/agenda sekolah/<?= $data['gambar'] ?>" alt="No Image" />
            </div>
            <div class="meta-text text-sm-center">
              <h4><?= $data['judul_agenda'] ?></h4>
              <p class="mt-3"><a href="asd" class="btn btn-primary">Selengkapnya</a></p>
              <div class="align-items-center justify-content-center d-flex">
                <a href="#"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
                <a href="#"><i class="ti-pinterest"></i></a>
              </div>
            </div>
          </div>
        <?php } ?>

        <!-- Akhir Perulangan  -->
      </div>
    </div>
  </section>
  <!--================ End Trainers Area =================-->

  <!--================ Start Events Area =================-->
  <div class="events_area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="main_title">
            <h2 class="mb-3 text-white">Testimonial</h2>
            <p>
              Pendapat mereke tentan SD IT Permata Padang
            </p>
          </div>
        </div>
      </div>
      <div class="row">

        <!-- Awal Perulangan -->
        <?php
        $ambilTesti = mysqli_query($con, "SELECT * FROM `testimoni` WHERE 1");
        while ($pecahTesti = mysqli_fetch_assoc($ambilTesti)) {
          $isi = substr($pecahTesti['isi_agenda'], 0, 200);
          // var_dump($pecahTesti);
        ?>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="single_event position-relative">
              <div class="card">
                <div class="card-body">
                  <h2><?= $pecahTesti['nama_testi'] ?></h2>
                  <small><?= $pecahTesti['profesi_testi'] ?></small>
                  <p><?= $pecahTesti['deskripsi_testi'] ?></p>
                </div>
              </div>
            </div>
          </div>
          <!-- Akhir Perulangan -->
        <?php } ?>
      </div>
    </div>
  </div>
  <!--================ End Events Area =================-->

  <!--================ Start Testimonial Area =================-->
  <div class="testimonial_area section_gap">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="main_title">
            <h2 class="mb-3">Dokumentasi Video</h2>
            <p>
              Dokumentasi Video SD IT Permata Padang
            </p>
          </div>
        </div>
      </div>

      <div class="row mx-auto">

        <!-- Akhir Perulangan -->

        <?php
        $glr = mysqli_query($con, "SELECT * FROM video ");
        while ($cglr = mysqli_fetch_assoc($glr)) {
          // var_dump($cglr['link_v']);
        ?>
          <div class="col-md-4">
            <div class="text-center">
              <iframe width="100%" height="300px" src="<?= $cglr['link_v'] ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              <div class="testi_text text-center">
                <p>
                  <h4><?= $cglr["ket"] ?></h4>
                  <a href="<?= $cglr['link_v'] ?>" class="btn btn-primary">Lihat Selengkapnya di Youtube</a>
                </p>
              </div>
            </div>
          </div>
        <?php } ?>

        <!-- Akhir Perulangan -->

      </div>

      <a href="asd" class="btn btn-primary">Semua Dokumentasi</a>

    </div>
  </div>
  <!--================ End Testimonial Area =================-->

  <!--================ Start footer Area  =================-->
  <footer class="footer-area section_gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 single-footer-widget">
          <h4>SD IT Permata</h4>
          <ul>
            <li><a href="asd">Sambutan</a></li>
            <li><a href="asd">Struktur</a></li>
            <li><a href="asd">Visi, Misi, & Akreditasi</a></li>
            <li><a href="asd">Fasilitas</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 single-footer-widget">
          <h4>Legalitas Sekolah</h4>
          <ul>
            <li><a href="https://dapo.dikdasmen.kemdikbud.go.id/sekolah/7BB497F77965D6BDE9A6">Kementerian Pendidikan</a></li>
            <li><a href="http://sekolah.data.kemdikbud.go.id/index.php/chome/profil/db3dbe87-1900-4f25-b138-d00fb71d5ea1">Data Pokok Pendidikan</a></li>
            <li><a href="https://referensi.data.kemdikbud.go.id/tabs.php?npsn=10310830">Data Referensi</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 single-footer-widget">
          <h4>Navigation</h4>
          <ul>
            <li><a href="asd">Beranda</a></li>
            <li><a href="asd">Profile</a></li>
            <li><a href="asd">Berita</a></li>
            <li><a href="asd">Contact</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 single-footer-widget">
          <h4>Map</h4>
          <!-- <p>You can trust us. we only send promo offers,</p> -->
          <div class="form-wrap" id="mc_embed_signup">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15957.1000746785!2d100.3809968!3d-0.9455544!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb980c35c0673f14e!2sSD%20IT%20PERMATA!5e0!3m2!1sid!2sid!4v1602624540238!5m2!1sid!2sid" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </div>
      <div class="row footer-bottom d-flex justify-content-between">
        <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>
            document.write(new Date().getFullYear());
          </script> All rights reserved <b>SD IT Permata Padang</b> | <a href="http://mediatamaweb.com"><b>CV Mediatama Web</b></a> by <a href="https://instagram.com/egovaflavia" target="_blank"><b>Egova</b></a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
        <div class="col-lg-4 col-sm-12 footer-social">
          <a href="asd"><i class="ti-facebook"></i></a>
          <a href="asd"><i class="ti-instagram"></i></a>
          <a href="asd"><i class="ti-twitter"></i></a>
          <a href="asd"><i class="ti-email"></i></a>
          <a href="https://goo.gl/maps/T9JrJb3oxdPwtPgC7"><i class="ti-map"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <!--================ End footer Area  =================-->

  <!-- Dari yang lama -->
  <script src="js/plugins.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyAC0h0f0HXUzD3JGdO0SOEyJl22aNxAm1g"></script>
  <script src="js/main1f63.js?_=jdu878d7"></script>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- <script src="js/jquery-3.2.1.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
  <script src="newStyle/js/popper.js"></script>
  <script src="newStyle/js/bootstrap.min.js"></script>
  <script src="newStyle/vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="newStyle/vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="newStyle/js/owl-carousel-thumb.min.js"></script>
  <script src="newStyle/js/jquery.ajaxchimp.min.js"></script>
  <script src="newStyle/js/mail-script.js"></script>
  <!--gmaps Js-->
  <script src="newStyle/js/gmaps.min.js"></script>
  <script src="newStyle/js/theme.js"></script>
</body>

</html>