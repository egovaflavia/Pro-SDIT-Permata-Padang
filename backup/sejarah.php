<section class="parallax parallax1" style="background:#000 url('img/backgrounds/bg-dark3.jpg') 50% 0 no-repeat fixed;">
            <div class="dark-overlay p-t-b-80" data-overlay-opacity="0">
                <div class="container">
                    <div class="row">
                        <h2 class="col-sm-12 text-light text-center" data-aos="fade-down" data-aos-delay="0">- SEJARAH -</h2>
                    </div>
                </div>
            </div>
        </section>

<section class="parallax parallax3" style="background: url('img/backgrounds/bg-white1.jpg') 50% 0 no-repeat fixed;">
            <div class="white-overlay p-t-b-80" data-overlay-opacity="0.8">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-md-12" data-aos="fade">
                            <div class="p-t-20">
							<?php 
								$ck =mysqli_query($con, "SELECT * FROM tentangkami");
								$bkl = mysqli_fetch_array($ck);
							?>
                                <h3 class="p-b-20 text-dark">Sejarah Berdirinya</h3>
                                <p class="text-dark"><?= $bkl["isi"];?></p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
		
		