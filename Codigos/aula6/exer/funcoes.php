<?php
	//exercicio1
	function somaValores(){
		$params = func_get_args();
		$result=0;
		foreach($params as $v){
			$result+=$v;
		}
		return $result;
	}
	//exercicio2
	function select($name,$array){
		echo "<select name='".$name."'>";
		foreach($array as $item){
			echo "<option>".$item."</option>";
		}
		echo "</select>";
	}

	//	exercicio3
	function ePar($num){
		if($num%2==0){
			return true;
		}else{
			return false;
		}
	}
	function parInpar($num){
		if($num%2==0){
			echo $num."e par";
		}else{
			echo $num."e impar";
		}
	}
	
	//exercicio4
	function imprimeCalendario($ds,$qd){
		$seman = array("seg","ter","qua"
		,"qui","sex","sab","dom");
		echo "<table border=1><tr>";
		
		foreach($seman as $d){
			echo "<td>".$d."</td>";
		}
		echo "</tr>";
		echo "<tr>";
		$cont = $ds - 1;
		for($i=0;$i<$ds-1;$i++){
			echo "<td></td>";
		}
		for($i=1;$i<=$qd;$i++){
			echo "<td>".$i ."</td>";
			$cont++;
			if($cont==7 ){
				echo "</tr><tr>";
				$cont =0;
			}
		}
		echo "</tr>";
		echo "</table>";
	}
	//exercicio5
	function fatorial($num){
		$return =1;
		for($i=$num;$i>1;$i--){
			$return *= $i;
		}
		return $return;
	}
	//exercicio6
	function idade($nas){
		$ano = date("Y");
		echo $ano;
		return $ano - $nas;
	}
?>