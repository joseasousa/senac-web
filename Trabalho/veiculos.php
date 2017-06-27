<?php
	function gravar_veiculo($conexao,$veiculo){
		$sql = "insert into veiculo
		(placa, marca, modelo ,hora_entrada, hora_saida)
		values('{$veiculo['placa']}',
		'{$veiculo['marca']}',
		'{$veiculo['modelo']}',
		'{$veiculo['hora_entrada']}',
		'{$veiculo['hora_saida']}')";

		//echo $sql;
		mysqli_query($conexao, $sql);
	}


?>
