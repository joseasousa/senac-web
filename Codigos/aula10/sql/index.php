<!DOCTYPE>
<html>
	<head>
		<title> </title>
		<meta  charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
		
		<!-- Última versão CSS compilada e minificada -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Tema opcional -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<!-- Última versão JavaScript compilada e minificada -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
		
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">sql</a>
				</div>				
			</div>
		</nav>
		
		
		<div class="container">
			<div class="row">
				
				<form >
					<div class="row">
						

						<div class="form-group">
							<input class="form-control" type="text" name="nome" placeholder="digite seu nome">
						</div>
						
						<div class="form-group">
							<textarea class="form-control" type="text" name="descricao" placeholder="digite uma descricao">
							</textarea>
						</div>
						
						<div class="form-group">
							<select name="prioridade">
							<option>Alta</option>	
							<option>Media</option>
							<option>Baixa</option>
							</select>
						</div>
						<div class="form-group">
								<input type="submit" class="btn btn-success" value="Enviar">
						</div>
					
					</div>
				</form>
				
			</div>
		</div>
		<?php
			include "banco.php";
			include "tarefas.php";
			include "libs.php";
		
			if($_GET){
			$tarefa = array("nome"=> $_GET["nome"],
			"descricao"=>$_GET["descricao"],
			"prioridade"=>$_GET["prioridade"]);
		
			gravar_tarefa($conexao,$tarefa);
			
			
			
				
			}
			$tarefas = buscar_tarefas($conexao);
			geraTabela($tarefas);
		?>
	</body>
</html>