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
	
	function buscar_tarefas($conexao)
	{
		$sqlBusca = "SELECT * FROM tarefas";
		$resultado = mysqli_query($conexao, $sqlBusca);
		$tarefas = [];
		while ($tarefa = mysqli_fetch_assoc($resultado)) {
		$tarefas[] = $tarefa;
	}
		return $tarefas;
	}
	
	function atualizar_tarefa($conexao, $tarefa){
		$sql ="
		UPDATE tarefas SET nome='{$tarefa["nome"]}',
		descricao='{$tarefa["descricao"]}',
		prioridade='{$tarefa["prioridade"]}' 
		WHERE id = {$tarefa["id"]};
		";
		
		mysqli_query($conexao, $sql);
	}
	
	function deleta_tarefa($conexao, $id){
		$sql = "DELETE FROM tarefas WHERE id ={$id}";
	
		mysqli_query($conexao, $sql);
	}
?>