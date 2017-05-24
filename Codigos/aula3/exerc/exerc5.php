<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 1</title>
	<meta charset="utf-8">
</head>
<body>
	<form name="formulario">
		<input type="text" name="nome" placeholder="Digite seu nome">
		<br>
		<input type="number" name="idade" placeholder="digite sua idade">
		<br>
		
		<input type="submit">
	</form>
	
	<?php
	if($_GET){
		$nome=$_GET["nome"];
		$idade=$_GET["idade"];
		if($idade > 17 && $idade <= 67){
			echo $nome." pode doar sangue";
		}else{
			echo $nome." não pode doar sangue";
		}
		
	}
	?>
</body>
</html>