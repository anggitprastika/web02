<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "artikel_db";
//lakukan koneksi dengan mysql
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$connection) {
    echo "Tidak dapat terhubung dengan database";
    
}
