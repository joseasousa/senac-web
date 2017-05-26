<!DOCTYPE>
<html>
	<head>
		<title>Exercício 5</title>
		<meta charset="utf-8">
	</head>
	<body>
		<form name="formulario">
		<input type="number" name="numero">
		<br>
		<input type="submit">
	</form>
	<?php
	if($_GET){
		$num = $_GET["numero"];
		$fat=$num; 
		for($i=$num;$i>1;$i--){
			$fat *= $i-1;			
		}
		echo "o fatorial de ". $num . " é: ".$fat;
	}
	?>
	</body>
</html>