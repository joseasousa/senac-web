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
		
		<input type="submit">
	</form>
	
	<?php
	if($_GET){
		$n1= $_GET["n1"];
		if($n1%2==0 ){
			echo "o numero ". $n1 ." par";
		}else{
			echo "o numero ". $n1 ." impar";
		}
		
	}
	?>
</body>
</html>