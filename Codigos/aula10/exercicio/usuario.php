<?php
	function gravar_usuario($conexao,$usuario){
		$sql = "
			INSERT INTO usuario
			(nome,email,telefone,
			endereco,usuario,senha,
			idade,sexo) VALUES 
			('{$usuario["nome"]}',
			'{$usuario["email"]}',
			{$usuario["telefone"]},
			'{$usuario["endereco"]}',
			'{$usuario["usuario"]}',
			'{$usuario["senha"]}',
			{$usuario["idade"]},
			'{$usuario["sexo"]}')";
									
			mysqli_query($conexao,$sql);
					
	}
?>