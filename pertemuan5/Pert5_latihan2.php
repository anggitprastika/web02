<?php 
$file = fopen("test1.txt","r"); 
while(! feof($file)) 
	{ 
 	echo fgets($file). "<br />"; 
 	} 
fclose($file); 

echo "<br><br>Nama : Anggit Prastika Setiany";
echo "<br>NIM &ensp;: 181011402365";
?> 