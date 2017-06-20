<!DOCTYPE>
<html>
	<head>
		<title>Exercicio formulario</title>
		<meta  charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">		
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
			<form>
				<div class="row">
					<div class="col-md-6"> 
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
					</div>
					
					<div class="col-md-6"> 
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
							<select name="sexo" class="form-control">
								<option value="m">Masculino</option>
								<option value="f">Feminino</option>
							</select>
						</div>
					</div> 
					
					<div class="row">
						<input type="submit" class="btn btn-success">
						<a href="lista.php" class="btn btn-info">Listar todos Usuarios</a>
					</div>
				</div>
			</form>
			
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
			
		</div>
		
	</body>
</html>