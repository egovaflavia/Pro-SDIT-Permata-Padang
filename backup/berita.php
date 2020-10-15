<section class="parallax parallax1" style="background:#000 url('img/backgrounds/bg-dark3.jpg') 50% 0 no-repeat fixed;">
            <div class="dark-overlay p-t-b-80" data-overlay-opacity="0">
                <div class="container">
                    <div class="row">
                        <h2 class="text-light text-center emphasis" data-in-effect="fadeInUp">Berita</h2>
                    </div>
                </div>
            </div>
        </section>

<section id="patch-pricing" class="bg-light-gray p-t-b-80">
            <div class="container">
                <div class="p-b-80">
                    <h1 class="text-colored text-center emphasis" data-aos="fade" data-aos-delay="0">Berita</h1>
                    <p class="col-sm-12 sub-header text-center" data-aos="fade" data-aos-delay="150">Berita SD IT PERMATA PADANG</p>
                </div>
				
                <div class="row packages-row">
				 <?php
              $sql = mysqli_query($con, "SELECT * FROM berita ORDER BY id_berita DESC");
              while ($data = mysqli_fetch_assoc($sql)) {
				  $isi = substr($data['isi_berita'],0,200);
				  $judulberita = substr($data['judul_berita'],0,16)."...";
            ?>
                    <div class="col-md-3  package-frame" data-aos="fade-up" data-aos-delay="150">
                        <div class="package">
                            <div class="price-header p-t-20">
                         <a href=""> <img src="img/berita/<?= $data['gambar'] ?>" class="img-responsive" alt="<?= $data['judul_berita'] ?>" width="100%" style="height:230px;"></a>
                            </div>
                            <div class="price-box p-t-b-20 text-center" >
                                <h6><?= $data['judul_berita'] ?></h6>
                            </div>
                            
                            <div class="features" align="justify " style="padding:3px 10px;">
                                
                               
                                <center><a class="btn btn-lg btn-ghost m-t-20 m-b-40 " href="?module=berita_detail&id=<?= $data['id_berita']?>"><span>Read More</span></a></center>
                            </div>
                        </div>
                    </div>
                     <?php } ?>
                </div>
    </div>
</section>