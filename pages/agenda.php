<section id="faq" class="faq">
    <div class="container">
        <div class="card-body">
            <div class="row">


                <?php
                $id = $_GET['idagenda'];
                $sql = mysqli_query($con, "SELECT * FROM agenda WHERE id_agenda='$id'");
                $data = mysqli_fetch_assoc($sql);
                ?>
                <article class="entry" data-aos="fade-up">

                    <div class="entry-img">
                        <img style="height: 600;" width="700" class="img-fluid" src="img/agenda sekolah/<?= $data['gambar'] ?>" alt="No Image" />
                    </div>

                    <h2 class="entry-title">
                        <?= $data['judul_agenda'] ?>
                    </h2>
                    <div class="entry-meta">
                        <ul>
                            <div class="meta">
                                <h5><span class="author">Posted in : <a href="#"><?= tgl_indo($data['tgl_postagen']) ?></a></span></h5>
                            </div>
                        </ul>
                    </div>
                    <br>
                    <div class="entry-content">
                        <p>
                            <?= $data['isi_agenda'] ?>
                        </p>
                    </div>

                </article><!-- End blog entry -->
            </div>
        </div>
    </div>
</section>