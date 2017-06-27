<!DOCTYPE>
<html>

<head>
	<title>trabalho integrador</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
</head>
<div id="header" style="text-align:center; padding:5px; background-color:green; color: black">

	<h1>ESTACIONAMENTO</h1>
	<?php echo date('d/m/Y');  ?>
</div>

<body>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">quinta-feira 27/06/2017</a>
			</div>
		</div>
	</nav>

	<div class="container">
		<form>
			<div class="row">

				<div class="col-md-6">

					<div class="form-group">
						<input class="form-control" type="text" name="placa" placeholder="placa">
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="marca" placeholder="marca">
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="modelo" placeholder="modelo">
					</div>
					<div class="form-group">
						<input class="form-control" type="datetime-local" name="hora_entrada">
					</div>
					<div class="form-group">
						<input class="form-control" type="datetime-local" name="hora_saida">
					</div>

					<div class="row">
						<input type="submit" class="btn btn-success">
					</div>
				</div>
		</form>


				<?php
		if( $_GET){
		$veiculos =array('placa'=>$_GET['placa'],
		'marca'=>$_GET['marca'],
		'modelo'=>$_GET['modelo'],
		'hora_entrada'=>$_GET['hora_entrada'],
		'hora_saida'=>$_GET['hora_saida']);
		$veiculos['hora_entrada']= str_replace('T', ' ', $veiculos['hora_entrada']);
		$veiculos['hora_saida']= str_replace('T', ' ', $veiculos['hora_saida']);
		gravar_veiculo($conexao,$veiculos);
		}
		?>
		

</body>

</html>
