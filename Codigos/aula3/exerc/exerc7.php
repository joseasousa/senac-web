<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 1</title>
	<meta charset="utf-8">
</head>
<body>
	<form name="formulario">
		<input type="number" name="nota" placeholder="digite um numero">
		<br>
		
		<input type="submit">
	</form>
	
	<?php
	if($_GET){
		$nota = $_GET["nota"];
		if($nota>=7){
			echo "aprovado";
		}else if($nota>=4){
			echo "esta de recuperação";
		}else{
			echo "reprovado";
		}
		
	}
	?>
</body>
</html>