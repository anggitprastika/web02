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
	// sql menampilkan record
	$sql = "SELECT id, name, email, address, phone, message FROM tamu";
	$result = $koneksi->query($sql);

	if ($result->num_rows > 0) {
    // output data setiap baris
    while($row = $result->fetch_assoc()) {

  	echo "<br>".
  	"id: ". $row["id"]. "<br>".
  	"Nama: ". $row["name"]. "<br>".
  	"Email: ". $row["email"]. "<br>".
 	"Alamat: ". $row["address"]. "<br>".
  	"Telepon: ". $row["phone"]. "<br>".
  	"Pesan: ". $row["message"]. "<br>";
    }
} else {
    echo "0 results";
}
$koneksi->close()
?>

</body>
</html>