<section class="parallax parallax1" style="background:#000 url('img/backgrounds/bg-dark3.jpg') 50% 0 no-repeat fixed;">
            <div class="dark-overlay p-t-b-80" data-overlay-opacity="0">
                <div class="container">
                    <div class="row">
                        <h2 class="text-light text-center emphasis" data-in-effect="fadeInUp">Berita</h2>
                    </div>
                </div>
            </div>
        </section>

<section class="parallax parallax3" style="background: url('img/backgrounds/bg-white1.jpg') 50% 0 no-repeat fixed;">
            <div class="white-overlay p-t-b-80" data-overlay-opacity="0.8">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-md-9" data-aos="fade">
                            <div class="p-t-20">
							<?php 
								$ck =mysqli_query($con, "SELECT * FROM berita where id_berita='$_GET[id]'");
								$bkl = mysqli_fetch_array($ck);
							?>
								<p><center><img src="img/berita/<?= $bkl['gambar']?>" style="width:60%; height:450px;"></center></p>
                                <h3 class="p-b-20 text-dark"><b><?= $bkl["judul_berita"];?></b></h3>
								<br>
								
								<p class="m-l-r-30" style="size:18px;"><strong><span style="font-family:Comic Sans MS,cursive"><?= $bkl["isi_berita"];?></span></strong></p>
                               
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-xs-12 widgets" data-aos="fade">
                            <ul class="blog-widget">
                                <li>
                                    <h5 class="widget-title">Recent Posts</h5></li>
                                <li>
                                    <?php
                                      $sql = mysqli_query($con, "SELECT * FROM berita ORDER BY RAND() LIMIT 4");
                                     while ($data = mysqli_fetch_assoc($sql)) {
                    				  $isi = substr($data['isi_berita'],0,230);
                    				  $judulberita = substr($data['judul_berita'],0,16)."...";
                                    ?>
                                    <div class="row">
                                        <a href="?module=berita_detail&id=<?= $data['id_berita']?>">
                                    <span class="col-xs-6"><img src="img/berita/<?= $data['gambar'] ?>" alt="<?= $data['judul_berita'] ?>"></span>
                                    <div class="col-xs-6">
                                        <h6><?= $judulberita ?></h6>
                                        <p class="text-light-gray"><small><?= tgl_indo($data['tgl_post']) ?></small></p>
                                    </div>
                                    </a>
                                    </div>
                                    <?php } ?>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>