<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 1</title>
	<meta charset="utf-8">
</head>
<body>
	<form name="formulario">
		<input type="number" name="n1" placeholder="digite um numero">
		<br>
		<input type="number" name="n2" placeholder="digite um numero">
		<br>
		<input type="submit">
	</form>
	
	<?php
	if($_GET){
		$n1=$_GET["n1"]; 
		$n2=$_GET["n2"];
		if($n1>$n2){
			echo "o maior valor é o valor do campo 1: ".$n1;
		}else{
			echo "o maior valor é o valor do campo 2: ".$n2;
		}
		
	}
	?>
</body>
</html>