<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initital-scale=1.0">
	<title>Kalkulator Sederhana | latihan 3</title>
</head>
<body>
	<h1>Kalkulator Sederhana | Latihan 3 | Pertemuan 2</h1>
	<form>
		<input type="number" name="a" placeholder="Bilangan a" value="<?php echo @$_GET['a'] ?>">

		<select name="operator">
    	<option <?php echo !@$_GET['operator'] ? 'selected' : '' ?> disabled>Pilih Operator</option>
    	<option <?php echo @$_GET['operator'] === '+' ? 'selected' : '' ?> value="+">+</option>
    	<option <?php echo @$_GET['operator'] === '-' ? 'selected' : '' ?> value="-">-</option>
    	<option <?php echo @$_GET['operator'] === '*' ? 'selected' : '' ?> value="*">*</option>
    	<option <?php echo @$_GET['operator'] === '/' ? 'selected' : '' ?> value="/">/</option>
		</select>

		<input type="number" name="b" placeholder="Bilangan b" value="<?php echo @$_GET['b'] ?>">
		<button type="submit">Submit</button>

		<?php
		if ($_GET):
    		$a = (float) @$_GET['a'];
    		$b = (float) @$_GET['b'];
    		$operator = @$_GET['operator'];
    
    		switch ($operator) {
    		    case '+':
            		$hasil = $a + $b;
            		break;
        		case '-':
           			$hasil = $a - $b;
            		break;
        		case '*':
            		$hasil = $a * $b;
            		break;
        		case '/':
            		$hasil = $a / $b;
            		break;
    		}
    	?>
    		<div style="margin-top: 1rem">
    			Hasil: <strong><?php echo $hasil ?></strong>
    		</div>
    	<?php
		endif; ?>
	</form>

	<br>
	<br>
	<p><b>Nama : Anggit Prastika Setiany</b></p>
	<p><b>NIM &ensp;: 181011402365</b></p> 
</body>
</html>