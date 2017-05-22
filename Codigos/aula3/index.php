<!DOCTYPE html>
<html>
	<head>
		<title>Aula3</title>
		<meta charset="utf-8">
	</head>

	<body>
		<form name="formulario" action="" method="get">
			<h1>Nome:</h1> <input type="text" name="nome" />
			<br>
			Senha: <input type="password" name="senha" />
			<br>
			Idade: <input type="number" name="idade" />
			<br>
			Email: <input type="email" name="email" />
			<br>
			<input type="submit" />
		</form>
		<br>
		<?php 
		if($_GET){
			echo ("Nome: " . $_GET["nome"]
			."<br>Senha: " . $_GET["senha"]
			."<br>Idade: " . $_GET["idade"]
			."<br>Email: " . $_GET["email"]
			);
		}			
		?>
	</body>
</html>
