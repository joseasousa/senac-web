<!DOCTYPE>
<html>
	<head>
		<title>Aula 5</title>
		<meta charset="utf-8">
	</head>
	<body>
	<table border=1>
	<thead>
		<tr>
			<td>n1</td>
			<td>n2</td>
			<td>n3</td>
		<tr>
	</thead>
	<tbody>
	<tr>
		<td>1</td>
		<td>2</td>
		<td>3</td>
	<tr>
	<tr>
		<td>4</td>
		<td>5</td>
		<td>6</td>		
	<tr>
	</tbody>
	</table>
	
	<?php
	include "funcoes.php";
	
	bemVindo("teste  de funções");
	$resul = soma(2,2);
	echo mediaParametros (1,2,3,4,5,6,7,8);
	echo "<br>";
	echo mediaParametros (4,4,4);
	
	?>

	</body>
</html>