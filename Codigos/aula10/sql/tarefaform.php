<!DOCTYPE>
<html>
	<head>
		<title> </title>
		<meta  charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">

		<!-- Última versão CSS compilada e minificada -->
		<link rel="stylesheet" href="./css/bootstrap.min.css">
		<!-- Tema opcional -->
		<link rel="stylesheet" href="./css/bootstrap-theme.min.css">
		
	</head>
	<body>
<?php
	if($_GET){
		$nome= $_GET["nome"];
		$descricao = $_GET["descricao"];
		$prioridade = $_GET["prioridade"];
		$id = $_GET["id"];
	}
	?>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">update</a>
				</div>
			</div>
		</nav>
		
		<div class="container">
			<form method="POST">
					<div class="row">
						<input type="hidden" value=<?php echo $id ?>  name="id" >
						
						<div class="form-group">
							<input value=<?php echo $nome; ?> class="form-control" type="text" name="nome" placeholder="digite seu nome">
						</div>

						<div class="form-group">
							<textarea  class="form-control" type="text" name="descricao" placeholder="digite uma descricao"><?php echo $descricao; ?></textarea>
						</div>

						<div class="form-group" value=<?php echo $prioridade; ?>>
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
				
				<?php
					include "banco.php";
					include "tarefas.php";
					if($_POST){
						$tarefa = array("nome" => $_POST["nome"],
						"descricao" => $_POST["descricao"],
						"prioridade" => $_POST["prioridade"],
						"id" => $_POST["id"]
						);
						
						atualizar_tarefa($conexao, $tarefa);	
						header('Location: index.php');
					}
				?>
				</div>
				
	</body>
	</html>