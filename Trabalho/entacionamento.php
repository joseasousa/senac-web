<?php

function listar_vagas($conexao){
	
	$sql="SELECT * FROM vaga ";
	$resultado=mysqli_query($conexao,$sql);
	
	$veiculos=[];
	
	while($veiculo= mysqli_fetch_array($resultado)){
		$veiculos[]=$veiculo;
		
	}
	
	return $veiculos;
} 


?>