<!DOCTYPE>
<html>
	<head>
		<title>Exercício 4</title>
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
			$num=$_GET["numero"];
			for($i=0;$i<=$num;$i++){
				echo $i." ";
			}
		}
	?>
	</body>
</html>