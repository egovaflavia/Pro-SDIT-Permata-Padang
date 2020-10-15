<div class="content-wrapper">

<?php
  if (isset($_GET['aksi'])){
    $aksi = $_GET['aksi'];

  switch ($aksi){
    case "editslide" :

    if(isset($_GET['id'])){
      $sql = mysqli_query($con, "SELECT * FROM slide WHERE id_slide='$_GET[id]'");
      $r=mysqli_fetch_assoc($sql);
    }

    if(isset($_POST['save'])){
      $nmfoto1 = $_FILES["slide_1"]["name"];
			$lokfoto1 = $_FILES["slide_1"]["tmp_name"];
      $new1= date("YmdHis").$nmfoto1;
      $nmfoto2 = $_FILES["slide_2"]["name"];
			$lokfoto2 = $_FILES["slide_2"]["tmp_name"];
      $new2= date("YmdHis").$nmfoto2;
      $nmfoto3 = $_FILES["slide_3"]["name"];
			$lokfoto3 = $_FILES["slide_3"]["tmp_name"];
      $new3= date("YmdHis").$nmfoto3;
	  
	  $nmfoto4 = $_FILES["slide_4"]["name"];
			$lokfoto4 = $_FILES["slide_4"]["tmp_name"];
      $new4= date("YmdHis").$nmfoto4;
	  
		if(!empty($lokfoto1)){
					move_uploaded_file($lokfoto1, "../../img/homeslider/$new1");
					unlink("../../img/homeslider/".$r['gambar_1']);
				}else{
          $new1 = $_POST['foto_lama1'];
        }
        if(!empty($lokfoto2)){
					move_uploaded_file($lokfoto2, "../../img/homeslider/$new2");
					unlink("../../img/homeslider/".$r['gambar_2']);
				}else{
          $new2 = $_POST['foto_lama2'];
        }
        if(!empty($lokfoto3)){
					move_uploaded_file($lokfoto3, "../../img/homeslider/$new3");
					unlink("../../img/homeslider/".$r['gambar_3']);
				}else{
          $new3 = $_POST['foto_lama3'];
        }
		if(!empty($lokfoto4)){
					move_uploaded_file($lokfoto4, "../../img/homeslider/$new4");
					unlink("../../img/homeslider/".$r['gambar_4']);
				}else{
          $new4 = $_POST['foto_lama4'];
        }
      $save=mysqli_query($con, "UPDATE slide SET gambar_1='$new1', gambar_2='$new2', gambar_3='$new3', gambar_4='$new4'");
      if($save) {
      echo"<script language=javascript>
            window.location='?module=slide';
            </script>";
            exit;
          }else{
            echo"gagal";
          }
    }
?>
<section class="content-header">
      <h1>
        Slide
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Slide</li>
      </ol>
</section>

<section class="content">
<div class="row">
  <div class="col-xs-12">
   <div class="box box-info">
        <!-- form start -->
        <form action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group" >
              <label class="col-sm-2 control-label">Slide 1</label>
              <div class="col-sm-4">
                <img src="../../img/homeslider/<?= $r['gambar_1'] ?>" style="width: 100%; height: 200px;"><br><br>
                <input type="file" name="slide_1">
                <input type="hidden" name="foto_lama1" value="<?= $r['gambar_1'] ?>">
              </div>
			  <label class="col-sm-4 control-label">NB : Untuk Ukuran Foto/Gambar Slide 2100 x 754. Dan Kapasitas size Gambar harus di bawah 2MB.</label>
            </div>

            <div class="form-group" >
              <label class="col-sm-2 control-label">Slide 2</label>
              <div class="col-sm-4">
                <img src="../../img/homeslider/<?= $r['gambar_2'] ?>" style="width: 100%; height: 200px;"><br><br>
                <input type="file" name="slide_2">
                <input type="hidden" name="foto_lama2" value="<?= $r['gambar_2'] ?>">
              </div>
            </div>

            <div class="form-group" >
              <label class="col-sm-2 control-label">Slide 3</label>
              <div class="col-sm-4">
                <img src="../../img/homeslider/<?= $r['gambar_3'] ?>" style="width: 100%; height: 200px;"><br><br>
                <input type="file" name="slide_3">
                <input type="hidden" name="foto_lama3" value="<?= $r['gambar_3'] ?>">
              </div>
            </div>
			
			<div class="form-group" >
              <label class="col-sm-2 control-label">Slide 4</label>
              <div class="col-sm-4">
                <img src="../../img/homeslider/<?= $r['gambar_4'] ?>" style="width: 100%; height: 200px;"><br><br>
                <input type="file" name="slide_4">
                <input type="hidden" name="foto_lama4" value="<?= $r['gambar_4'] ?>">
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-4 col-md-offset-2">
                <button type="submit" name="save" class="btn btn-primary btn-flat">Simpan</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
</div>
</section>
<?php
break;
}
}else{
?>
<section class="content-header">
      <h1>
        Slide
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Slide</li>
      </ol>
</section>
<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                     <th>Slide 1</th>
                     <th>Slide 2</th>
                     <th>Slide 3</th>
					 <th>Slide 4</th>
                     <th>Action</th>
                  </tr>
                </thead>

                <tbody>
          			<?php
          				$q=mysqli_query($con, "SELECT * from slide");
          				$r=mysqli_fetch_array($q);
                ?>
						      <tr>
						          <td><img src="../../img/homeslider/<?= $r['gambar_1'] ?>" style="width: 100px; height: 70px;"></td>
						          <td><img src="../../img/homeslider/<?= $r['gambar_2'] ?>" style="width: 100px; height: 70px;"></td>
						          <td><img src="../../img/homeslider/<?= $r['gambar_3'] ?>" style="width: 100px; height: 70px;"></td>
								  <td><img src="../../img/homeslider/<?= $r['gambar_4'] ?>" style="width: 100px; height: 70px;"></td>
                      <td><a class='btn btn-success btn-xs' title='Edit Data' href='?module=slide&aksi=editslide&id=<?php echo $r['id_slide']; ?>'><span class='glyphicon glyphicon-edit'></span></a></td>
						      </tr>
				      </tbody>
            </table>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
          </div>
          <!-- /.box -->
     </section>
<?php } ?>
</div>