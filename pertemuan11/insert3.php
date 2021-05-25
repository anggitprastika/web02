<?php 

echo "<br>Nama : Anggit Prastika Setiany";
echo "<br>NIM &ensp;: 181011402365<br><br>";

$con = mysqli_connect("localhost","root","");
if (!$con) 
 	{ 
 	die('Could not connect: ' . mysqli_error()); 
 	}
mysqli_select_db($con, "lat_dbase");

$sql = "INSERT INTO tbl_mhs (FirstName, LastName, Age)
VALUES 
('$_POST[firstname]','$_POST[lastname]','$_POST[age]')"; 
if (!mysqli_query($con, $sql)) 
	{ 
  	die('Error: ' . mysqli_error()); 
  	} 
echo "1 record added"; 
mysqli_close($con)
?>