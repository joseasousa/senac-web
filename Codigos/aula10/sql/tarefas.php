<?php	
	
	function gravar_tarefa($conexao, $tarefa){
		
		$sql = "
		INSERT INTO tarefas
		(nome, descricao, prioridade)
		VALUES(
		'{$tarefa['nome']}',
		'{$tarefa['descricao']}',
		'{$tarefa['prioridade']}'
		)";
		//echo($sql);
		mysqli_query($conexao, $sql);		
	}
?>