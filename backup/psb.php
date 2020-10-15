<section class="parallax parallax1" style="background:#000 url('img/backgrounds/bg-dark3.jpg') 50% 0 no-repeat fixed;">
            <div class="dark-overlay p-t-b-80" data-overlay-opacity="0">
                <div class="container">
                    <div class="row">
                        <h2 class="text-light text-center emphasis" data-in-effect="fadeInUp">PENERIMAAN SISWA BARU</h2>
                    </div>
                </div>
            </div>
        </section>


<section id="contact-field" class="p-t-b-80">
            <div class="container">
                <div class="col-md-6 col-md-offset-3" style="border:1px solid grey; padding:10px 0; border-radius:3px; ">
                    <div class="text-center">
                        <div>
                            <h1>Form <span class="text-colored">PSB</span></h1>
                        </div>
                    </div>
                    <form method="POST" action="" target="_blank">
                        <div class="row " >
                            
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" name="nama_siswa" placeholder="Nama Siswa*" required data-error="Please enter a valid username">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" name="jk_siswa" placeholder="Jenis Kelamin*">
                                </div>
                            </div>
							<div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" name="tmpt_lahir" placeholder="Tempat Lahir*">
                                </div>
								
                            </div>
							<div class="col-sm-6">
                                <div class="form-group">
                                    <input type="date" class="form-control input-lg" name="tgl_lahir" placeholder="Tanggal Lahir*">
                                </div>
								
                            </div>
							<div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" name="tk_asal" placeholder="Tk Asal Anak*" required data-error="Please enter a valid username">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
							
							
							<div class="col-sm-12">
                                <div class="form-group">
                                    <label> Data Orang Tua </label>
                                </div>
                            </div>
							
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" name="ayah" placeholder="Ayah*">
                                </div>
                            </div>
							<div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" name="ibu" placeholder="Ibu*">
                                </div>
                            </div>
							<div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" name="pk_ayah" placeholder="Pekerjaan Ayah*">
                                </div>
                            </div>
							<div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" name="pk_ibu" placeholder="Pekerjaan Ibu*">
                                </div>
                            </div>
							<div class="col-sm-12">
                                <div class="form-group">
                                    <input type="number" class="form-control input-lg" name="nohp" placeholder="No Handphone*">
                                </div>
                            </div>
							<div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" name="alamat_ortu" placeholder="Alamat Lengkap Ortu*">
                                </div>
                            </div>
							<div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" name="kelurahan" placeholder="Kelurahan*">
                                </div>
                            </div>
							<div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" name="kecamatan" placeholder="Kecamatan*">
                                </div>
                            </div>
							<div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" name="kab_kota" placeholder="Kab/Kota*">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-submitted">
                                <img class="svg-loader" src="img/assets/loader.svg" alt="loader message">
                            </div>
                        </div>
                        <input type="submit" name="simpan" class="btn btn-colored btn-lg center-block m-t-20" value="Simpan">
						
                    </form>
                    <div id="status-notification" class="text-colored"></div>
                </div>
            </div>
        </section>
		
<?php 
if(isset($_POST["simpan"])){

	$slq = mysqli_query($con,"INSERT INTO psb (nama_siswa, jk_siswa, tmpt_lahir, tgl_lahir, tk_asal, ayah, ibu, pk_ayah, pk_ibu, nohp, alamat_ortu, kelurahan, kecamatan, kab_kota) values('$_POST[nama_siswa]','$_POST[jk_siswa]','$_POST[tmpt_lahir]','$_POST[tgl_lahir]','$_POST[tk_asal]','$_POST[ayah]','$_POST[ibu]','$_POST[pk_ayah]','$_POST[pk_ibu]','$_POST[nohp]','$_POST[alamat_ortu]','$_POST[kelurahan]','$_POST[kecamatan]','$_POST[kab_kota]')");
	
	$id= mysqli_insert_id($con);
	if($slq){
		echo"<script>
			window.alert('Daftar Berhasil');
			window.location='cetak_psb.php?id_psb=$id';
		</script>";
	}else{
		echo"<script>
			window.alert('Daftar Gagal');
			window.location='?module=psb';
		</script>";
	}
}

?>