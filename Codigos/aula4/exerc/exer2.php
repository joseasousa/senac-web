<!DOCTYPE>
<html>
	<head>
		<title>Exercício 2</title>
		<meta charset="utf-8">
	</head>
	<body>
		<form name="formulario">
			<input type="text" name="nome">
			<select name="ano">
			<?php
			for($i=1960;$i<2018;$i++){
				echo "<option>". $i ."</option>";
			}
			?>
			</select>
			<br>
			<br>
			<input type="submit">
		</form>
		
		<?php
		if($_GET){
			$ano = $_GET["ano"];
			$nome = $_GET["nome"];
			echo $nome." tem ". (2017-$ano)." Anos";
		}
		?>
	</body>
</html>