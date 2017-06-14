<!DOCTYPE>
<html>
	<head>
		<title>Exercicio formulario</title>
		<meta  charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
	</head>
	<body>
	
	<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Exercicio</a>
				</div>
			</div>
	</nav>
	
	<div class="container">
		<form >
			<div class="form-group">
				<input class="form-control" type="text" name="nome" placeholder="digite seu nome">
			</div>
			<div class="form-group">
				<input class="form-control" type="email" name="email" placeholder="digite seu email">
			</div>
			<div class="form-group">
				<input class="form-control" type="number" name="telefone" placeholder="digite seu Telefone">
			</div>
			<div class="form-group">
				<input class="form-control" type="text" name="endereco" placeholder="digite o seu endereco">
			</div>
			<div class="form-group">
				<input class="form-control" type="text" name="usuario" placeholder="digite o seu usuario">
			</div>
			<div class="form-group">
				<input class="form-control" type="password" name="senha" placeholder="digite a sua senha">
			</div>
			<div class="form-group">
				<input class="form-control" type="number" name="idade" placeholder="digite a sua idade">
			</div>
			<div class="form-group">
				<select name="sexo">
					<option value="m">Masculino</option>
					<option value="f">Feminino</option>
				</select>
			</div>
			<input type="submit" class="btn btn-success">
		</form>
	</div>
	<?php
		include "banco.php";
		include "usuario.php";
		
		if($_GET){
		
		$usuario = array(
		"nome" => $_GET["nome"],
		"email" => $_GET["email"],
		"telefone" => $_GET["telefone"],
		"endereco" => $_GET["endereco"],
		"usuario" => $_GET["usuario"],
		"senha" => $_GET["senha"],
		"idade" => $_GET["idade"],
		"sexo" => $_GET["sexo"]
		);
		
		gravar_usuario($conexao,$usuario);
		
		}
		
	?>

	</body>
</html>