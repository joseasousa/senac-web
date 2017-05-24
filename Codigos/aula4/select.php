<!DOCTYPE HTML>
<html>
	<head>
	<title>Aula 4</title>
	<meta charset="utf-8">
	</head>
	<body>
	<form>
	<strong>Qual seu processador?</strong>
	<br>
	<select name=processador>
		<option value=i3>core i3</option>
		<option value=i5>i5</option>
		<option value=i7>i7</option>
		<option selected>AMD</option>
	</select>
	<br>
	<br>
	<B>Livros que deseja comprar?</B><br>
	Obs: segure "CTRL" para selecionar mais de um.<br>
	<select name="processadores[]" multiple>
		<option value=i3>core i3</option>
		<option value=i5>i5</option>
		<option value=i7>i7</option>
		<option selected>AMD</option>
	</select>
	<br>
	<input type="submit">
	</form>
	
	<?php
	if($_GET){
	$proc = $_GET["processador"];
	echo "<br><h1>".$proc."</h1>";
	}
	//isset verifica se foi selecionado 
	//pelomenos 1 elemento
	if(isset($_GET["processadores"])) {
		echo "O(s) processadores(s) que 
		você deseja comprar:<br>";
		// Faz loop para os processadores		
		foreach($_GET["processadores"] as $pro){			
			echo "- " . $pro . "<br>";
		}
	}
	else{
		echo "Você não escolheu nenhum!";
	}
	
	?>
	</body>
</html>