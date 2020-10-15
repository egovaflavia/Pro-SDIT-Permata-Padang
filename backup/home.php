<section class="single-post">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php
            $nagari = mysqli_query($con, "SELECT * from slide");
            while ($sql = mysqli_fetch_array($nagari)) {
            ?>
                <div class="item active">
                    <img src="img/homeslider/<?= $sql['gambar_1'] ?>" style="" alt="blog-post" class="image-responsive">
                </div>

                <div class="item">
                    <img src="img/homeslider/<?= $sql['gambar_2'] ?>" style="" alt="blog-post" class="image-responsive">
                </div>

                <div class="item">
                    <img src="img/homeslider/<?= $sql['gambar_3'] ?>" style="" alt="blog-post" class="image-responsive">
                </div>

                <div class="item">
                    <img src="img/homeslider/<?= $sql['gambar_4'] ?>" style="" alt="blog-post" class="image-responsive">
                </div>

            <?php } ?>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <marquee>
        <?php
        $sel = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM selamatdatang"));
        ?>
        <h3><b><?= $sel['isi_selamatdatang'] ?></h3></b></marquee>
    <h5 style="background-color:gray; border-top: 5px solid lightskyblue;"></h5>
    </section">


    <section id="about" class="p-t-b-80">
        <div class="container">
            <div>
                <h1 class="text-dark text-center">Profil<span class="text-colored emphasis"> Sekolah</span></h1>
            </div>
            <div>&nbsp;</div>
            <div class="row">

                <?php
                $sql = mysqli_query($con, "SELECT * FROM tentangkami");
                $st = mysqli_fetch_array($sql);
                $isi = substr($st["isi"], 0, 300);
                ?>
                <div class="col-md-3 col-xs-12 m-t-b-30">
                    <div class="box-with-dark-shadow bg-colored text-center p-t-b-40" style="padding:20px 10px;">

                        <h4 class="emphasis text-light">Struktur</h4>

                        <a class="btn btn-white btn-xlg" href="?module=struktur">Read more</a>
                    </div>
                </div>

                <?php
                $sql1 = mysqli_query($con, "SELECT * FROM visimisi");
                $visi = mysqli_fetch_array($sql1);
                $isi1 = substr($visi["isi_visi"], 0, 300);
                ?>

                <div class="col-md-3 col-xs-12 m-t-b-30">
                    <div class="box-with-dark-shadow bg-colored text-center p-t-b-40" style="padding:20px 10px; background-color: #CB4154;">

                        <h4 class="emphasis text-light">Visi & Misi</h4>
                        <a class="btn btn-white btn-xlg" href="?module=visimisi">Read more</a>
                    </div>

                </div>

                <?php
                $sql3 = mysqli_query($con, "SELECT * FROM sarana_prasarana");
                $st = mysqli_fetch_array($sql3);
                $isi3 = substr($st["isi_sarana"], 0, 300);
                ?>
                <div class="col-md-3 col-xs-12 m-t-b-30">
                    <div class="box-with-dark-shadow bg-colored text-center p-t-b-40" style="padding:20px 10px; background-color: #1CAC78;">

                        <h4 class="emphasis text-light">Sarana Prasarana</h4>
                        <a class="btn btn-white btn-xlg" href="?module=sarana">Read more</a>
                    </div>
                </div>

                <?php
                $sql4 = mysqli_query($con, "SELECT * FROM sambutan");
                $ss = mysqli_fetch_array($sql4);
                $isi4 = substr($ss["isi_sambutan"], 0, 300);
                ?>
                <div class="col-md-3 col-xs-12 m-t-b-30">
                    <div class="box-with-dark-shadow bg-colored text-center p-t-b-40" style="padding:20px 10px; background-color: #FFA343;">

                        <h4 class="emphasis text-light">Sambutan</h4>
                        <a class="btn btn-white btn-xlg" href="?module=sarana">Read more</a>
                    </div>
                </div>

            </div>


        </div>
    </section>
    <!--
<section class="parallax parallax3" style="background: url('img/backgrounds/bg-white1.jpg') 50% 0 no-repeat fixed;">
    <div class="white-overlay p-t-b-80" data-overlay-opacity="0.8">
        <div class="container">
            <div>
                <h1 class="text-dark text-center">Keunggulan  <span class="emphasis text-colored">Sekolah</span></h1>
            </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 m-t-b-30">
                        <span class="ion-ios-plus-outline icon-4x text-colored col-xs-1 col-sm-1 col-md-2 col-lg-2"></span>
                        <div class="col-xs-11 col-sm-11 col-md-10 col-lg-10">
                            <h4 class="emphasis">Biaya Terjangkau</h4>
							<p>Biaya sekolah terjangkau dan tidak memberatkan</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 m-t-b-30">
                        <span class="ion-ios-checkmark-outline icon-4x text-colored col-xs-1 col-sm-1 col-md-2 col-lg-2"></span>
                        <div class="col-xs-11 col-sm-11 col-md-10 col-lg-10">
                            <h4 class="emphasis">Belajar Nyaman</h4>
							<p>Lingkungan sekolah yang asri membuat kegiatan belajar menjadi lebih nyaman</p>
                        </div>
                    </div>
					<div class="col-md-4 col-sm-4 col-xs-12 m-t-b-30">
                        <span class="ion-ios-analytics-outline icon-3x text-colored col-xs-2 col-sm-2"></span>
                        <div class="col-xs-11 col-sm-11 col-md-10 col-lg-10">
                            <h4 class="emphasis">Guru Berdedikasi</h4>
							<p>Guru mendedikasikan hidupnya untuk kebaikan siswa dan keluarga</p>
                        </div>
                    </div>
                </div>
                <div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12 m-t-b-30">
                       <span class="ion-ios-star-outline icon-3x text-colored col-xs-2 col-sm-2"></span>
                        <div class="col-xs-11 col-sm-11 col-md-10 col-lg-10">
                            <h4 class="emphasis">Selalu Berprestasi</h4>
                            <p>Berprestasi adalah jiwa, tujuan dan kebanggan kami</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 m-t-b-30">
                        <span class="ion-ios-heart-outline icon-3x text-colored col-xs-2 col-sm-2"></span>
                        <div class="col-xs-11 col-sm-11 col-md-10 col-lg-10">
                            <h4 class="emphasis">Minat Bakat Siswa</h4>
                            <p>SDIT Rahmaniyah menyediakan banyak pilihan ekstrakurikuler dan klub sebagai sarana pengembangan minat bakat</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 m-t-b-30">
                        <span class="ion-ios-monitor-outline icon-3x text-colored col-xs-2 col-sm-2"></span>
                        <div class="col-xs-11 col-sm-11 col-md-10 col-lg-10">
                            <h4 class="emphasis">Online Service</h4>
                            <p>SDIT rahmaniyah menyediakan informasi dan pendaftaran melalui website</p>
                        </div>
                    </div>
                </div>
                <div class="p-t-b-20"></div>
			
			
        </div>
    </div>
</section>
-->
    <section class="call-action p-t-b-80 bg-colored">
        <div class="container">
            <div class="row call-1" style="border:1px solid white; background-color:white; border-radius:5px;">
                <h4 class="text-left text-light" style="color:blue; "><b>PENERIMAAN SISWA BARU SD IT PERMATA PADANG</b></h4>
                <a class="btn btn-ghost btn-sm" href="?module=psb">DAFTAR</a>
            </div>
        </div>
    </section>

    <section id="patch-pricing" class="bg-light-gray p-t-b-80">
        <div class="container p-b-40">
            <div>
                <h1 class="text-colored text-center emphasis" data-aos="fade" data-aos-delay="0">Berita</h1>
                <p class="col-sm-12 sub-header text-center" data-aos="fade" data-aos-delay="150">Berita SD IT PERMATA PADANG</p>
            </div>
        </div>

        <div class="blogging blog p-t-b-80" id="section2">
            <div class="container">
                <div class="row">
                    <?php
                    $sql = mysqli_query($con, "SELECT * FROM berita ORDER BY id_berita DESC LIMIT 4");
                    while ($data = mysqli_fetch_assoc($sql)) {
                        $isi = substr($data['isi_berita'], 0, 230);
                        $judulberita = substr($data['judul_berita'], 0, 16) . "...";
                    ?>

                        <div class="item col-sm-3 p-b-40">
                            <div class="post row">
                                <div class="col-xs-12">
                                    <a href="?module=berita_detail&id=<?= $data['id_berita'] ?>"><img src="img/berita/<?= $data['gambar'] ?>" alt="<?= $data['judul_berita'] ?>" class="img-responsive" style="width: 100%; height: 250px;"></a>
                                    <br>
                                    <div class="blog-info">
                                        <span class="meta">
                                            <span class="date-month"><?= tgl_indo($data['tgl_post']) ?></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-12">
                                        <h3 style="font-size: 20px;"><a href="?module=berita_detail&id=<?= $data['id_berita'] ?>"><?= $data['judul_berita'] ?></a></h3>
                                        <br>
                                    </div>
                                    <a class="read-more" href="?module=berita_detail&id=<?= $data['id_berita'] ?>">Read More...</a>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>
            <div align="center">
                <a class="btn btn-primary" href="?module=berita">LIHAT SEMUA</a>
            </div>
        </div>
    </section>

    <section class="p-t-b-80 lets-social">
        <div class="container">
            <div class="row p-b-80" data-aos="fade" data-aos-delay="0">
                <h1 class="text-dark text-center">Let's get <span class="text-colored emphasis">Social</span></h1>
                <p class="col-sm-12 sub-header text-center">Social is the new sexy!</p>
            </div>

            <?php
            $ss = mysqli_query($con, "SELECT * FROM sosmed");
            $cek = mysqli_fetch_array($ss);

            ?>


            <div class="row">
                <div class="col-sm-3 text-center">
                    <a href="<?= $cek["fb"]; ?>" target="_blank">
                        <div class="social-frame">
                            <span class="text-colored ion-social-facebook icon-3x"></span>
                        </div>
                        <h4><a href="<?= $cek["fb"]; ?>" target="_blank">Facebook</a></h4>
                    </a>
                </div>
                <div class="col-sm-3 text-center">
                    <a href="<?= $cek["twitter"]; ?>" target="_blank">
                        <div class="social-frame">
                            <span class="text-colored ion-social-twitter icon-3x"></span>
                        </div>
                        <h4><a href="<?= $cek["twitter"]; ?>" target="_blank">Twitter</a></h4>
                    </a>
                </div>
                <div class="col-sm-3 text-center">
                    <a href="<?= $cek["ig"]; ?>" target="_blank">
                        <div class="social-frame">
                            <span class="text-colored ion-social-instagram icon-3x"></span>
                        </div>
                        <h4><a href="<?= $cek["ig"]; ?>" target="_blank">Instagram</a></h4>
                    </a>
                </div>
                <div class="col-sm-3 text-center">
                    <a href="https://api.whatsapp.com/send?phone=<?php echo $cek['wa'] ?>&text=Halo Admin. Saya ingin bertanya." target="_blank">
                        <div class="social-frame">
                            <span class="text-colored fa fa-whatsapp icon-3x"></span>
                        </div>
                        <h4><a href="https://api.whatsapp.com/send?phone=<?php echo $cek['wa'] ?>&text=Halo Admin. Saya ingin bertanya." target="_blank">WA</a></h4>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-light-gray p-t-b-80">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12 p-t-b-40 text-center">
                    <span class="ion-ios-analytics icon-5x icon-blue"></span>
                    <?php
                    $tgl = date('Y-m-d');
                    $pengunjung = mysqli_num_rows(mysqli_query($con, "SELECT * FROM statistik WHERE tanggal='$tgl' GROUP BY ip")); // Hitung jumlah pengunjung

                    $pengunjung1 = mysqli_fetch_assoc(mysqli_query($con, "SELECT *,SUM(hits) AS ph FROM statistik WHERE tanggal='$tgl'"));

                    $totalpengunjung  = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(hits) AS tot FROM statistik")); // hitung total pengunjung

                    $totalpengunjung1 = mysqli_fetch_assoc(mysqli_query($con, "SELECT *,SUM(hits) AS tp FROM statistik"));

                    $bataswaktu       = time() - 300;
                    $pengunjungonline = mysqli_num_rows(mysqli_query($con, "SELECT * FROM statistik WHERE online > '$bataswaktu'")); // hitung pengunjung online
                    ?>
                    <h2 class="counter emphasis text-colored"><?= $pengunjung1['ph'] ?></h2>
                    <p>Pengunjung Hari Ini</p>
                </div>
                <div class="col-md-4 col-xs-12 p-t-b-40 text-center">
                    <span class="ion-ios-analytics icon-5x icon-orange"></span>
                    <h2 class="counter emphasis text-colored"><?= $totalpengunjung1['tp'] ?></h2>
                    <p>Total Pengunjung</p>
                </div>
                <div class="col-md-4 col-xs-12 p-t-b-40 text-center">
                    <span class="ion-ios-analytics icon-5x icon-green"></span>
                    <h2 class="counter emphasis text-colored"><?= $pengunjungonline ?></h2>
                    <p>Pengunjung Online</p>
                </div>
            </div>
        </div>
    </section>



    <!-- Kontak -->
    <section class="p-t-b-80 bg-colored">
        <div class="container">
            <div>
                <?php
                $ps = mysqli_query($con, "SELECT * FROM sosmed");
                $cps = mysqli_fetch_array($ps);
                ?>
                <h2 class="text-light text-center"><span class="ion-android-call"> </span><span class=" emphasis"> Kontak</span></h2>
                <h2 class="text-light text-center ">GSM/WA <span class="emphasis">: <a href="tel:<?= $cps['wa'] ?>" style="color:white;"><?= $cps['wa'] ?></a></span></h2>
            </div>
        </div>
    </section>

    <section class="maps" id="maps">
        <h1 class="hide_me">Map</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.275002237526!2d100.3788066147536!3d-0.9455686993102247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b913005e5ba1%3A0xee2d1ee264453293!2sSekolah+Dasar+Islam+Terpadu+Permata!5e0!3m2!1sen!2sid!4v1544504212733" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>

    </section>