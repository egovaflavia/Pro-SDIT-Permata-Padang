<section class="parallax parallax1" style="background:#000 url('img/backgrounds/bg-dark3.jpg') 50% 0 no-repeat fixed;">
	<div class="dark-overlay p-t-b-80" data-overlay-opacity="0">
		<div class="container">
			<div class="row">
				<h2 class="text-light text-center emphasis" data-in-effect="fadeInUp">Guru</h2>
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
						<h3>GURU SD IT PERMATA PADANG </h3>
						<hr>
						<table class="table table-bordered table-striped">
							<tr>
								<th class="text-center">No</th>
								<th class="text-center">Nama</th>
								<th class="text-center">Gambar</th>
								<th class="text-center">Jenis Kelamin</th>
								<th class="text-center">Jabatan</th>
								<th class="text-center">Alamat</th>
							</tr>
							<?php
							$ck = mysqli_query($con, "SELECT * FROM tenaga_kp");
							$no = 1;
							while ($bkl = mysqli_fetch_array($ck)) {
							?>
								<tr>
									<th><?= $no; ?></th>
									<th><?= $bkl['nama_guru']; ?></th>
									<th><img src="img/guru/<?= $bkl['foto']; ?>" style="height:180px"></th>
									<th><?= $bkl['jk_g']; ?></th>
									<th><?= $bkl['jabatan_g']; ?></th>
									<th><?= $bkl['alamat_g']; ?></th>
								</tr>
							<?php $no++;
							} ?>
						</table>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>