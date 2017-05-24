<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 6</title>
	<meta charset="utf-8">
</head>
<body>
	<form name="formulario">
		<input type="number" name="raio" placeholder="digite um numero">
		<br>
		
		<input type="submit">
	</form>
	
	<?php
	if($_GET){
		$raio = $_GET["raio"];
		$diametro=2*$raio;
		$circu=0;
		$compri=0;
		$area=3.14*($raio *$raio);
		echo "o diametro é: ".$diametro;
		echo "<br> a cirduferencia é de :".$circu;
		echo "<br> o comprimento é de: ".$compri;
		echo "<br> a area é de: ".$area;
	}
	?>
</body>
</html>