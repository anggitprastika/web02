<html> 
<head> 
	<title>Contoh Counter</title> 
</head> 

<body> 
<?php 
 	$nama_file="counter.dat"; 
 	If (file_exists($nama_file)) 
 	{ 
 		$berkas = fopen($nama_file,"r"); 
 		$pencacah = (integer)trim(fgets($berkas, 255)); 
 		$pencacah++; 
 		fclose($berkas); 
 	} 
 	else 
 		$pencacah = 1; 
 	// simpan pencacah 
 	$berkas = fopen($nama_file,"w"); 
 	fputs($berkas, $pencacah); 
 	fclose($berkas); 
 	// tulis ke halaman web 
 	Print("Anda pengunjung ke-$pencacah <br>\n"); 

echo "<br><br>Nama : Anggit Prastika Setiany";
echo "<br>NIM &ensp;: 181011402365";
?> 
</body> 
</html>