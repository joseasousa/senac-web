<html>
<body>
<?php
	$num=0;
	//quando nao saber ezatamente quando ira parar
	while ($num != 9){
		echo $num." ";
		$num=rand(1,100);
	}
?>
<br>
<br>
<select name="anos">
<?php
	for($i=1969; $i<2017;$i++){
		echo "<option>".$i."</option>";
	}
?>
</select>
<br>
<br>


<select name="proce">

<?php
	$pro = array("amd","i3","i5","i7","core 2 duo");
	foreach($pro as $item){
		echo "<option>".$item."</option>";
	}
	
?>
<select name="anos">
</body>
</html>