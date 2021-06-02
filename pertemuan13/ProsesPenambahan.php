<?php 

    echo "Nama : Anggit Prastika Setiany<br>";
    echo "NIM &ensp;: 181011402365<br><br>";

include "koneksi.php";

$judul= $_POST['title'];
$penulis = $_POST['author'];
$lead = $_POST['abstraksi'];
$isi = $_POST['content'];
date_default_timezone_set('Asia/Jakarta');
$time=date("Y-m-d H:i:s");
$lead = str_replace("\r\n","<br>",$lead);
$content = str_replace("\r\n","<br>",$isi);
$query = "INSERT INTO articles (judul,penulis,lead,content,waktu)values('$judul','$penulis','$lead','$isi','$time')";
$result = mysqli_query($connection, $query);
if($result){
 echo "<h3 align=center>Proses penambahan artikel berhasil</h3>";
 echo "<A href=\"MembuatTampilan.php\">List</A>";
}else{
 echo "<h2 align=center>Proses penambahan artikel tidak berhasil</h2> ". mysqli_error($connection);
}
?>