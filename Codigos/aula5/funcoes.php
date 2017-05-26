<?php
	function bemVindo($nome){
		echo "<h1>".$nome."</h1>";
	}
	
	function soma($num1,$num2){
		return $num1+$num2;
	}
	
	function mediaParametros () {
		$paramentros = func_get_args();
		$resul=0;
		foreach ( $paramentros as $posicao => $valor ) {
			$resul += $valor;
		}	
		return $resul / ($posicao+1);
	}

?>