<?php
    
    include "koneksi.php";
    echo "Nama : Anggit Prastika Setiany<br>";
    echo "NIM &ensp;: 181011402365<br><br>";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Form Isian Artikel</title>
</head>
<body>
<h1>Form Berita</h1>
<form name=article method=post action=ProsesPenambahan.php>
    <table width="100%" cellspacing="0" cellpadding="0">
        <tr>
            <td width="18%">Judul</td>
            <td width="2%">:</td>
            <td width="80%"><input type="text" name="title" size="30" class="masukan"></td>
        </tr>
        <tr>
            <td>Penulis</td>
            <td>:</td>
            <td><input type="text" name="author" size="30" class="masukan"></td>
        </tr>
        <tr>
            <td>Lead</td>
            <td>:</td>
            <td><textarea name="abstraksi" rows="4" cols="45"></textarea></td>
        </tr>
        <tr>
            <td>Content</td>
            <td>:</td>
            <td><textarea name="content" rows="8" cols="45"></textarea></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="Submit" value="Add" class="tombol">
                <input type="reset" name="batal" value="Reset" class="tombol">
            </td>
        </tr>
    </table>
</form>
</body>
</html>