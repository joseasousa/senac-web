<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 1</title>
	<meta charset="utf-8">
</head>
<body>
	<form name="formulario">
		<input type="text" name="usuario" placeholder="Digite um usuario">
		<br>
		<input type="password" name="senha" placeholder="Digite a senha">
		<br>
		<input type="submit">
	</form>
	
	<?php
	if($_GET){
		 $user = $_GET["usuario"];
		 $senha = $_GET["senha"];
		if($user == "user" && $senha == "senha"){
		echo "bem vindo " . $user;	
		}else{
			echo "usuario nao cadastrado";
		}
	}
	?>
</body>
</html>