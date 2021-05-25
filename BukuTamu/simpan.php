<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
</head>
<body>
	<h1>BUKU TAMU</h1>
	<a href="index.php"> Kembali ke Buku Tamu</a>
	<br>
	<h2>BUKU TAMU</h2>
	<a href="tampil.php"> Lihat Buku Tamu</a>
	<hr size=1>

	<?php
	include ("koneksi.php");
	$nama=$_POST['name'];
	$email=$_POST['email'];
	$alamat=$_POST['address'];
	$telepon=$_POST['phone'];
	$pesan=$_POST['message'];

// sql entry data pada tabel
$sql = "INSERT INTO tamu (name, email, address, phone, message)
VALUES ('$nama','$email','$alamat','$telepon','$pesan')";

if ($koneksi->query($sql) === TRUE) {
    echo "Pesan telah terkirim!";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
</body>
</html>