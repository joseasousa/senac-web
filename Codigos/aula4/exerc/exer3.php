<!DOCTYPE>
<html>
	<head>
		<title>Exercício 3</title>
		<meta charset="utf-8">
	</head>
	<body>
	<form name="formulario">
		<select name="cidades">
	<?php
	include "cities.php";
	
	foreach ($cities as $po => $c){
		echo "<option value=".$po.">".$c["city"]."</option>";
	}
	?>
		</select>
		<input type="submit">
	</form>
	<?php
	
	if($_GET){
		echo $cities[$_GET["cidades"]]["city"].
		" Pertence ao estado de ".$cities[$_GET["cidades"]]["state"] ;
	}
	?>
	</body>
</html>