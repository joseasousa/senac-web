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
	<br><br>
	<B>Livros que deseja comprar?</B><br>
	Obs: segure "CTRL" para selecionar mais de um.<br>
	<select name="livros[]" multiple>
		<option value="Biblia do PHP">Biblia do PHP</option>
		<option value="PHP Professional">PHP Professional</option>
		<option value="Iniciando em PHP">Iniciando em PHP</option>
		<option value="Biblia do MySQL">Biblia do MySQL</option>
	</select>
	<br>
	<input type="submit">
	</form>
	
	<?php
	if($_GET){
	$proc = $_GET["processador"];
	echo "<br><h1>".$proc."</h1>";
	}
	//isset verifica se foi selecionado pelomenos 1 elemento
	if(isset($_GET["livros"])) {
		echo "O(s) livro(s) que você deseja comprar:<br>";
		// Faz loop para os livros
		foreach($_GET["livros"] as $livro){
			echo "- " . $livro . "<br>";
		}
	}
	else{
		echo "Você não escolheu nenhum livro!";
	}
	
	?>
	</body>
</html>