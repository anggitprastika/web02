<?php
    
    echo "Nama : Anggit Prastika Setiany<br>";
    echo "NIM &ensp;: 181011402365<br><br>";

include "koneksi.php";
$ID = $_POST['ID'];
$title = $_POST['title'];
$author = $_POST['author'];
$abstraksi = $_POST['abstraksi'];
$content = $_POST['content'];
date_default_timezone_set('Asia/Jakarta');
$time=date("Y-m-d H:i:s");

//$lead = str_replace("\r\n","<br>",$lead);
//$content= str_replace("\r\n","<br>",$content);
$update="UPDATE articles SET judul='$title', penulis='$author',lead='$abstraksi',content='$content', waktu='$time' WHERE articleID ='$ID'";
$hasil=mysqli_query($connection,$update);
if ($hasil) {
 echo "Artikel berhasil di update<br>";
 echo "<a href=\"MembuatTampilan.php\">List</a>";
} else {
 echo "Artikel gagal di update";
}
