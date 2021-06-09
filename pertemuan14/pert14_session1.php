<?php 
/**************************************************** 
Halaman ini merupakan halaman contoh penciptaan session. Perintah session_start() harus 
ditaruh di perintah pertama tanpa spasi di depannya. Perintah session_start() harus ada pada 
setiap halaman yang berhubungan dengan session 
*****************************************************/ 
session_start(); 
if (isset ($_POST['Login'])) { 
	$user = $_POST['user']; 
	$pass = $_POST['pass'];
	//periksa login 
	if ($user == "anggit" && $pass = "1234") { 
		//menciptakan session 
		$_SESSION['login'] = $user; 
		//menuju ke halaman pemeriksaan session
	echo "<h1>Anda berhasil LOGIN</h1>"; 
	echo "<h2>Klik <a href='pert14_session2.php'>di sini (pert14_session2.php)</a> untuk menuju ke halaman pemeriksaan session";

	echo "<br><br>Nama : Anggit Prastika Setiany";
    echo "<br>NIM &ensp;: 181011402365<br>";
	} 
} else { 
?>
<!DOCTYPE html>
<html> 
<head>
	<meta charset="utf-8"> 
	<title>Login Here</title> 
</head> 
<body> 
	<form action="" method="post"> 
		<h2>Login Here...</h2> 
		Username : <input type="text" name="user"><br> 
		Password : <input type="password" name="pass"><br>
		<br>Nama : Anggit Prastika Setiany
    	<br>NIM &ensp;: 181011402365<br><br>
		<input type="submit" name="Login" value="Log In"> 
	</form> 
</body> 
</html>
<?php } ?>