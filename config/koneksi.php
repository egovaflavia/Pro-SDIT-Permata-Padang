<?php
$base_url = "http://localhost/KITTRAVELLING/";
date_default_timezone_set('Asia/Jakarta');
$server = "localhost";
// $user = "sditgsch_permata";
// $password = "sditpp2019";
// $database = "sditgsch_permata";
$user = "root";
$password = "mysql";
$database = "db_sditpermata";

$con = mysqli_connect($server, $user, $password, $database) or die(mysqli_connect_error());
