<section class="parallax parallax1" style="background:#000 url('img/backgrounds/bg-dark3.jpg') 50% 0 no-repeat fixed;">
            <div class="dark-overlay p-t-b-80" data-overlay-opacity="0">
                <div class="container">
                    <div class="row">
                        <h2 class="text-light text-center emphasis" data-in-effect="fadeInUp">- PORTFOLIO -</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio - Latest Projects -->
        <section id="portfolio" class="p-t-80 p-b-40">
            <div class="container" id="filterizr">
                <!--<nav class="p-b-20">
                    <ul class="filter-pack nav" data-aos="fade">
                        <li class="active" data-filter="all">All</li>
                        <li data-filter="1">Branding</li>
                        <li data-filter="2">Identity</li>
                        <li data-filter="3">Design</li>
                    </ul>
                </nav>-->
				
				<div class="container p-b-40">
                <div>
                    <h1 class="text-dark text-center" data-aos="fade">Gal<span class="text-colored emphasis">ery</span> </h1>
                </div>
            </div>
				
				
                <div class="col-xs-12">
                    <div class="filtr-container" data-aos="fade-up" data-aos-delay="0">
					
					<?php 
						$glr = mysqli_query($con, "SELECT * FROM galeri ");
						while($cglr=mysqli_fetch_array($glr)){
					?>
					
                        <div class="col-xs-12 col-sm-6 col-md-4 filtr-item p-b-40" data-category="1, 3">
                            
                                <div class="portfolio-gallery">
                                    <figure>
                                        <div class="portfolio-link">
                                        </div>
                                        <a target="_blank" href="img/galery/<?= $cglr['foto']?>"><div class="image-wrap"><img src="img/galery/<?= $cglr['foto']?>" alt="Image Project" style="width:100%; height:235px;"/>
                                            <div class="portfolio-dark-on-hover"></div>
                                            <p><?= $cglr["nama_galeri"]?></p></a>
                                        </div>
                                    </figure>
                                </div>
                            
                        </div>
						
						<?php } ?>
                        
                    </div>
                </div>
            </div>
        </section>