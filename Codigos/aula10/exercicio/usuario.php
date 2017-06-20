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
	
	function logar($conexao, $user, $senha){
		$sql = "
		SELECT * FROM usuario 
		WHERE usuario='{$user}' 
		AND senha='{$senha}'
		";
		$resultado = mysqli_query($conexao,$sql);
		$users=[];
		while($user = mysqli_fetch_assoc($resultado)){
			$users[]=$user; 
		}
		
		if(count($users)>0){
			return true;
		}else{
			return false;
		}
	}
	
	function listar_usuarios($conexao){
		$sql = "
			SELECT * FROM usuario 		
		";
		$resultado = mysqli_query($conexao,$sql);
		$users=[];
		while($user = mysqli_fetch_assoc($resultado)){
			$users[]=$user; 
		}
		
		return $users;
	}
	
?>