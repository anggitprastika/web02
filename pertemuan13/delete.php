<?php

    echo "Nama : Anggit Prastika Setiany<br>";
    echo "NIM &ensp;: 181011402365<br><br>";

include "koneksi.php";
$articleID = $_GET['articleID'];
$perintah="DELETE FROM articles WHERE articleID =\"$articleID\"";
$hasil= mysqli_query ($connection, $perintah);
if ($hasil) { 
echo "Artikel berhasil dihapus<br>";
 echo "<a href=\"MembuatTampilan.php\">Back</a>";
} else {
 echo "Komentar gagal dihapus. Kemungkinan terjadi kegagalan koneksi
 ke database MySQL.";
 }
?>