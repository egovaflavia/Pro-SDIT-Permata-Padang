<section class="parallax parallax1" style="background:#000 url('img/backgrounds/bg-dark3.jpg') 50% 0 no-repeat fixed;">
    <div class="dark-overlay p-t-b-80" data-overlay-opacity="0">
        <div class="container">
            <div class="row">
                <h2 class="text-light text-center emphasis" data-in-effect="fadeInUp">Agenda Sekolah</h2>
            </div>
        </div>
    </div>
</section>

<?php
if (@$_GET["id"] == "") {
?>
    <section class="container p-t-b-80">

        <div class="row">
            <?php
            $sql = mysqli_query($con, "SELECT * FROM agenda ORDER BY id_agenda DESC");
            while ($data = mysqli_fetch_assoc($sql)) {
                $isi = substr($data['isi_agenda'], 0, 200);
            ?>


                <div class="col-md-4 col-xs-12 m-t-b-30">
                    <div class="border-round text-center p-t-b-40">
                        <div class="price-header p-t-20">
                            <a href=""> <img src="img/agenda sekolah/<?= $data['gambar'] ?>" class="img-responsive" alt="<?= $data['judul_agenda'] ?>" width="100%"></a>
                        </div>
                        <h4 class="emphasis"><?= $data['judul_agenda'] ?></h4>

                        <center><a class="btn btn-lg btn-ghost m-t-20 m-b-40 " href="?module=agenda&id=<?= $data['id_agenda'] ?>"><span>Read More</span></a></center>
                    </div>
                </div>

            <?php } ?>
        </div>
        </div>
    </section>

<?php
} else {
?>


    <section class="parallax parallax3" style="background: url('img/backgrounds/bg-white1.jpg') 50% 0 no-repeat fixed;">
        <div class="white-overlay p-t-b-80" data-overlay-opacity="0.8">
            <div class="container">

                <div class="row">
                    <div class="col-md-12" data-aos="fade">
                        <div class="p-t-20">
                            <?php
                            $ck = mysqli_query($con, "SELECT * FROM agenda where id_agenda='$_GET[id]'");
                            $bkl = mysqli_fetch_array($ck);
                            ?>
                            <h3 class="p-b-20 text-dark">Agenda Sekolah</h3>
                            <p class="text-dark"><span style="font-family:Comic Sans MS !important"></span><?= $bkl["isi_agenda"]; ?></span></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

<?php } ?>