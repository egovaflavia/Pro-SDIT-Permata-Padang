<section class="parallax parallax1" style="background:#000 url('img/backgrounds/bg-dark3.jpg') 50% 0 no-repeat fixed;">
            <div class="dark-overlay p-t-b-80" data-overlay-opacity="0">
                <div class="container">
                    <div class="row">
                        <h2 class="text-light text-center emphasis" data-in-effect="fadeInUp">LEGALITAS</h2>
                    </div>
                </div>
            </div>
        </section>

<section class="parallax parallax3" style="background: url('img/backgrounds/bg-white1.jpg') 50% 0 no-repeat fixed;">
            <div class="white-overlay p-t-b-80" data-overlay-opacity="0.8">
                <div class="container p-b-40">
                
            </div>
                <div class="container">
                <div class="row team-carousel owl-dot-style1 owl-carousel owl-theme" style="margin:auto">
				<?php 
					$prj = mysqli_query($con, "SELECT * FROM legalitas ");
					while($pj = mysqli_fetch_array($prj)){
				
				?>
                    <div class="team">
                        <div class="people-profile">
                            <div class="image-frame">
                                <img src="img/legalitas/<?= $pj['foto']?>" class="img-responsive" alt="team-member" style="height:630px">
                                
                            </div>
                        </div>
                        
                    </div>
					<?php } ?>
                </div>
            </div>
                </div>
            </div>
        </section>