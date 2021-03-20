<?php
echo "Tabel Perkalian";
echo "<br>================<br>";
for($i=12; $i<=12; $i++) 
{
	for($j=15; $j<=45; $j++)
	{
		if(($j % 2) == 1) {
			$hasil = $i * $j;
			echo $i." * ".$j." = ".$hasil."<br>";
		}
	}
}

echo "<br><br>Nama : Anggit Prastika Setiany";
echo "<br>NIM &ensp;: 181011402365";
?>