<!DOCTYPE>
<html>
	<head>
		<title>Exercício 2</title>
		<meta charset="utf-8">
	</head>
	<body>
		<form>
		<div>
			<?php 
			include "funcoes.php";
			$produtos = array('Agulha', 
'Casa popular',
'Charuto',
'Cigarro',
'Cinto de couro',
'Coelho de pelúcia',
'Confete / Serpentina');
			select("produtos",$produtos);
			?>
			</div>
			<div>
			<input type="number" name="valor">
			</div>
			<div>
			<input type="text" name="obs" placeholder="digite as observaçoes">
			</div>
			<input type="submit">
		</form>
		
		<?php
		if($_GET){
			echo $_GET["produtos"];
		}
		?>
	</body>
</html>