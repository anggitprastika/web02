<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");

echo "<br><h3>Nama : Anggit Prastika Setiany</h3>";
echo "<h3>NIM &ensp;: 181011402365</h3>";
?>