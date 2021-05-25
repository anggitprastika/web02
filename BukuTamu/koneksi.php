<?php
	$hostmysql = "localhost";
	$username = "root";
	$password = "";
	$database = "bukutamu";
	$koneksi = mysqli_connect ($hostmysql, $username, $password, $database);
	if ($koneksi){
 		echo "<b> Koneksi Berhasil </b>";
	}
	else{
 		die ("<b> Koneksi Gagal </b>");
	}
?>