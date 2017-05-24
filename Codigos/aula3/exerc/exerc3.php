<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 1</title>
	<meta charset="utf-8">
</head>
<body>
	<form name="formulario">
		<input type="number" name="n1" placeholder="digite um numero 1">
		<br>
		<input type="number" name="n2" placeholder="digite um numero 2">
		<br>
		<input type="number" name="n3" placeholder="digite um numero 3">
		<br>
		<input type="submit">
	</form>
	
	<?php
	if($_GET){
		$n1=$_GET["n1"]; 
		$n2=$_GET["n2"];
		$n3=$_GET["n3"]; 
		if($n1>$n2 && $n1> $n3){
			echo "o maio e n1 ".$n1;
			if($n2<$n3){
				echo "<br>n2 menor".$n2;
			}else{
				echo "<br>n3 menor".$n3;
			}
		}else if($n2>$n1 && $n2> $n3){
			echo "o maio e n2 ".$n2;
			if($n1<$n3){
				echo "<br>n1 menor".$n1;
			}else{
				echo "<br>n3 menor".$n3;
			}
		}else{
			echo "o maio e n3 ".$n3;
			if($n2<$n1){
				echo "<br>n2 menor".$n2;
			}else{
				echo "<br>n1 menor".$n1;
			}
		}
		
	}
	?>
</body>
</html>