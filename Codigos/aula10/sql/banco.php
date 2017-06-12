<?php
	$bdServidor = '127.0.0.1';
	$bdUsuario = 'root';
	$bdSenha = '';
	$bdBanco = 'sistematarefa';
	
	$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha,
	$bdBanco);
	
	if (mysqli_connect_error($conexao)) {
		echo "Problemas para conectar no banco. Erro: ";
		echo mysqli_connect_error();
		die();
	}
?>