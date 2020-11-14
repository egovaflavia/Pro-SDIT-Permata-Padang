<?php
// header('location:page_404.php');
include "config/koneksi.php";
include "config/fungsi_indotgl.php";
session_start();

$ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
$tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
$waktu   = time(); //

// Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini
$s = mysqli_query($con, "SELECT * FROM statistik WHERE ip='$ip' AND tanggal='$tanggal'");

// Kalau belum ada, simpan data user tersebut ke database
if (mysqli_num_rows($s) == 0) {
  mysqli_query($con, "INSERT INTO statistik(ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");
}
// Jika sudah ada, update
else {
  mysqli_query($con, "UPDATE statistik SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");
}


$contact = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM contact"));
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'components/head.php' ?>
</head>

<body>
  <?php include 'components/navbar.php' ?>

  <?php include 'content.php'; ?>
  <!--================ Start Header Menu Area =================-->



  <!--================ Start footer Area  =================-->
  <?php include 'components/footer.php' ?>
  <!--================ End footer Area  =================-->

  <!-- Dari yang lama -->
  <?php include 'components/script.php' ?>
</body>

</html>