<?php
	include "banco.php";
	include "tarefas.php";
	
	if($_GET){
		$id= $_GET["id"];
		
		deleta_tarefa($conexao, $id);	
		header('Location: index.php');		
	}
?>