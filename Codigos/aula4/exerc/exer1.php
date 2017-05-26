<!DOCTYPE HTML>
<html>
	<head>
	<title>Exercício 1</title>
	<meta charset="utf-8">
	</head>
	<body>
	<form name="cadastro">
		<input type="text" name="nome" placeholder="Digite seu nome">
		<br>
		<input type="text" name="cpf" placeholder="Digite um CPF">
		<br>
		<input type="rg" name="rg" placeholder="Digite seu RG">
		<br>
		<input type="email" name="email" placeholder="Digite seu Email">
		<br>
		<input type="phone" name="telefone" placeholder="Digite seu telefone">
		<br>
		<input type="submit">
		
	</form>
	<?php	
		if($_GET){
			$pessoa = array("nome" => $_GET["nome"],
			"cpf" => $_GET["cpf"],
			"rg" => $_GET["rg"],
			"email" => $_GET["email"],
			"telefone" => $_GET["telefone"]
			);
			
			echo "Nome: ". $pessoa["nome"].
			"<br>CPF: ". $pessoa["cpf"].
			"<br>RG: ". $pessoa["rg"].
			"<br>email: ". $pessoa["email"].
			"<br>telefone: ". $pessoa["telefone"];
		}
	?>
	</body>
</html>