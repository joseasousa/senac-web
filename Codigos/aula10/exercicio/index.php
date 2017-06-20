<!DOCTYPE>
<html>
	<head>
		<title>Login</title>
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
				<div   class="row">				
					
					<div class="col-md-6"> 
						<div class="form-group">						
							<input class="form-control" type="text" name="usuario" placeholder="digite o seu usuario">
						</div>
						<div class="form-group">
							<input class="form-control" type="password" name="senha" placeholder="digite a sua senha">
						</div>
					</div> 
					<div class="row">
						<input type="submit" class="btn btn-success">
					</div>
				</div>
			</form>
			
			<?php
				include "banco.php";
				include "usuario.php";
				
				if($_GET){
					$usuario = $_GET["usuario"];
					$senha = $_GET["senha"];
					if(logar($conexao,$usuario, $senha)){						
						header("Location:principal.php");
					}
					else{
						echo "usuario nao cadastrado";
					}
					
				}
				
				?>
					
		</div>
		
		</body>
				</html>				