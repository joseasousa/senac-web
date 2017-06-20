<!DOCTYPE>
<html>
	<head>
		<title>Login</title>
		<meta  charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">		
	</head>
	<body>
	
	<?php
		include "banco.php";
		include "libs.php";
		include "usuario.php";
		
		$users = listar_usuarios($conexao);
		geraTabela($users);
	?>
	</body>
</html>