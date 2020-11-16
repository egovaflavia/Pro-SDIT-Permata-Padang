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
  <section class="feature_area section_gap_top" id="feature_area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="main_title">
            <h2 class="mb-3">Visi, Misi, & Profile Sekolah</h2>
            <p>
              MAN KOTA PARIAMAN
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <?php $sql = mysqli_query($con, "SELECT * FROM visimisi");
              $data = mysqli_fetch_assoc($sql); ?>
              <div class="single_feature">
                <?= $data['isi_visi'] ?>
              </div>
            </div>

          </div>
        </div>
        <div class="col-md-4">
          <div class="single_feature">
            <div class="icon"><span class="flaticon-earth"></span></div>
            <?php $sql = mysqli_query($con, "SELECT * FROM akreditasi");
            $data = mysqli_fetch_assoc($sql); ?>
            <div class="desc">
              <?= $data['isi_akre'] ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
  </section>
  <!--================ End Feature Area =================-->

  <!--================ Start Popular Courses Area =================-->
  <section id="popular_courses">
    <div class="popular_courses">
      <div class="container">
        <div class="row">
          <!-- single course -->
          <div class="col-lg-9 col-md-12">
            <div class="kiri">
              <div class="main_title">
                <h2 class="mt-3">Berita Terkini</h2>
                <p>
                  Menyajikan berita seputar MAN KOTA PARIAMAN
                </p>
              </div>
              <ul>
                <?php
                $sql = mysqli_query($con, "SELECT * FROM berita ORDER BY id_berita DESC LIMIT 5");
                while ($data = mysqli_fetch_assoc($sql)) {
                  $isi = substr($data['isi_berita'], 0, 100);
                  $judulberita = substr($data['judul_berita'], 0, 16) . "...";
                ?>
                  <li>
                    <div class="row">
                      <div class="kotak">
                        <div class="col-md-4 col-sm-12">
                          <span class="rel_thumb">
                            <a href="?page=pages/berita&iddetail=<?php echo $data['id_berita'] ?>"><img style="height: 150px;" width="320px" class="img-fluid" src="img/berita/<?= $data['gambar'] ?>" alt="No Image" /></a>
                          </span>
                        </div>
                        <div class="col-md-8 col-sm-12">
                          <div class="rel_right">
                            <a href="?page=pages/berita&iddetail=<?php echo $data['id_berita'] ?>">
                              <h4><?= $data['judul_berita'] ?></h4>
                            </a>
                            <div class="meta">
                              <h5><span class="author">Posted in : <a href="#"><?= tgl_indo($data['tgl_post']) ?></a></span></h5>
                            </div>
                            <p>
                              <h5> <?= $isi ?> ....</h5>
                            </p>
                            <a href="?page=pages/berita&iddetail=<?php echo $data['id_berita'] ?>" class="btn btn-primary">Selengkapnya</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <br>
                <?php } ?>
                <a href="" class="btn btn-primary">Semua Berita</a>
              </ul>
            </div>
          </div>

          <div class="col-lg-3 col-md-12">
            <div class="kiri">
              <h4>Kepala Madrasah</h4>
              <div class="card">
                <center>
                  <img alt="KEPALA MADRASAH" height="273" id="Image1_img" src="img/ZALKHAIRI.jpg" width="195" style="visibility: visible;">
                </center>
                <h5 class="text-center">Zalkhairi, S.Ag, M.Pd</h5>
              </div>
              <br>
              <h4>Save The Earth</h4>
              <div class="col-lg-12 col-md-6 col-sm-6"></div>
              <center>
                <img alt="save the earth" height="273" id="Image1_img" src="img/green.jpg" width="195" style="visibility: visible;">
              </center>
              <br>
              <center>
                <img alt="save the earth" height="273" id="Image1_img" src="img/germas.jpeg" width="195" style="visibility: visible;">
              </center>
              <br>
              <div class="col-lg-12 col-md-6 col-sm-6"></div>
              <center>
                <img alt="save the earth" height="273" id="Image1_img" src="img/germas.jpg" width="195" style="visibility: visible;">
              </center>
              <br>
              <center>
                <img alt="save the earth" height="273" id="Image1_img" src="img/re.jpg" width="195" style="visibility: visible;">
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!--================ End Popular Courses Area =================-->

  <!--================ Start Registration Area =================-->
  <!-- <div class="section_gap registration_area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="row clock_sec clockdiv" id="clockdiv">
              <div class="col-lg-12">
                <h1 class="mb-3">Siswa MAN KOTA PARIAMAN</h1>
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
              <h3>Detail MAN KOTA PARIAMAN</h3>
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
    </div> -->
  <!--================ End Registration Area =================-->

  <!--================ Start Trainers Area =================-->
  <section class="trainer_area section_gap_top">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="main_title">
            <h2>Agenda</h2>
            <p>
              Agenda Sekolah, MAN KOTA PARIAMAN
            </p>
          </div>
        </div>
      </div>

      <!-- Awal Perulangan  -->
      <div class="row">
        <?php
        $sql = mysqli_query($con, "SELECT * FROM agenda ORDER BY id_agenda DESC LIMIT 6");
        while ($data = mysqli_fetch_assoc($sql)) {
          $isi = substr($data['isi_agenda'], 0, 200);
          // var_dump($data);
        ?>
          <div class="col-lg-2 col-md-12 col-sm-12">
            <div class="thumb d-flex justify-content-sm-center">
              <img style="width:100px; height: 50px;" class="img-fluid" src="img/agenda sekolah/<?= $data['gambar'] ?>" alt="No Image" />
            </div>
          </div>
          <div class="col-lg-4">
            <div class="meta-text text-sm-left">
              <h4><?= $data['judul_agenda'] ?></h4>
              <p class="mt-3"><a href="?page=pages/agenda&idagenda=<?php echo $data['id_agenda'] ?>" class="btn btn-primary">Selengkapnya</a></p>
              <!-- <div class="align-items-center justify-content-center d-flex">
                <a href="#"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
                <a href="#"><i class="ti-pinterest"></i></a>
              </div> -->
            </div>
          </div>

        <?php } ?>
      </div>
    </div>
    <!-- Akhir Perulangan  -->
    </div>
  </section>
  <!--================ End Trainers Area =================-->

  <!-- Start  -->
  <!-- <section id="counts" class="counts">
    <div class="container aos-init aos-animate" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <i class="icofont-users-social"></i>
          <div class="count-box">
            <span data-toggle="counter-up">232</span>
            <p>Siswa</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="icofont-document-folder"></i>
            <span data-toggle="counter-up">521</span>
            <p>Guru</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="icofont-live-support"></i>
            <span data-toggle="counter-up">1,463</span>
            <p>Lokal</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="icofont-users-alt-5"></i>
            <span data-toggle="counter-up">15</span>
            <p>Lab</p>
          </div>
        </div>

      </div>

    </div>
  </section> -->
  <!-- End -->
  <!--================ Start Events Area =================-->
  <!-- <section id="events_area">
    <div class="events_area">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3 text-white">Testimonial</h2>
              <p>
                Pendapat mereke tentan MAN KOTA PARIAMAN
              </p>
            </div>
          </div>
        </div>
        <div class="row">
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
                    <small><u class="text-info"><?= $pecahTesti['profesi_testi'] ?></u></small>
                    <p><?= $pecahTesti['deskripsi_testi'] ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section> -->
  <!--================ End Events Area =================-->

  <!--================ Start Testimonial Area =================-->
  <div class="testimonial_area section_gap">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="main_title">
            <h2 class="">Dokumentasi Video</h2>
            <p>
              Dokumentasi Video MAN KOTA PARIAMAN
            </p>
          </div>
        </div>
      </div>

      <div class="row mx-auto">

        <!-- Akhir Perulangan -->

        <?php
        // $glr = mysqli_query($con, "SELECT * FROM video ");
        // while ($cglr = mysqli_fetch_assoc($glr)) {
        // var_dump($cglr['link_v']);
        ?>
        <?php $sql = mysqli_query($con, "SELECT * FROM video ORDER BY id_video DESC LIMIT 3");
        while ($data = mysqli_fetch_assoc($sql)) { ?>
          <div class="col-md-4">
            <div class="text-center">
              <iframe width="100%" height="300" src="<?= $data['link_v'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

              <div class="testi_text text-center">
                <p>
                  <h4><?= $data['ket'] ?></h4>
                </p>
              </div>
            </div>
          </div>
        <?php } ?>

        <!-- <div class="col-md-4">
                  <div class="text-center">
                      <iframe width="100%" height="300" src="https://www.youtube.com/embed/Vd5CcigJ69c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <div class="testi_text text-center">
                          <p>
                              <h4>MAN KOTA PARIAMAN || Adiwiyata Mandiri | Film Pendek</h4>
                              <a href="https://youtu.be/Vd5CcigJ69c" class="btn btn-primary">Lihat Selengkapnya di
                                  Youtube</a>
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="text-center">
                      <iframe width="100%" height="300" src="https://www.youtube.com/embed/tpVEZ7XCrzc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <div class="testi_text text-center">
                          <p>
                              <h4>Music Concert Nada Syiar Padusunan MAN Kota Pariaman Mengikuti MMC 6 Tahun 2017</h4>
                              <a href="https://youtu.be/tpVEZ7XCrzc" class="btn btn-primary">Lihat Selengkapnya di
                                  Youtube</a>
                          </p>
                      </div>
                  </div>
              </div> -->
        <?php // } 
        ?>

        <!-- Akhir Perulangan -->

      </div>

      <a href="" class="btn btn-primary">Semua Dokumentasi</a>

    </div>
  </div>
  <!--================ End Testimonial Area =================-->