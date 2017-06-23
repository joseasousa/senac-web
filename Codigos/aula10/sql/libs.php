<?php

	function geraTabela($rs)
	{
		$s = "<table class='table table-striped' >";
		$s .= "<tr>";

			$s .= "<tr>";
			foreach($rs[0] as $chave => $t){
				if($chave != "id"){
			$s .=  "<td>$chave</td>";
		}
		}
		$s .=  "<td>Ações</td><td></td>";
		$s .= "</tr>";

		foreach ($rs as $data){
			$s .= "<tr>";
			foreach($data as $chave => $t){
				if($chave == "id"){
					$s .=  "<td style='display: none;'>$t </td>";
					}else{
					$s .=  "<td>$t </td>";
				}
			}
			$s .= "<td><a class='btn btn-info' href='tarefaform.php?id={$data["id"]}&nome={$data["nome"]}&descricao={$data["descricao"]}&prioridade={$data["prioridade"]}'> Update </a></td>";
			$s .= "<td><a class='btn btn-danger' href='delete.php?id={$data["id"]}'>Delete</a></td>";
			$s .= "</tr>";
		}



		$s .= "</table>";

		echo $s;
	}
?>
