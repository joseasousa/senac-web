<?php

	function geraTabela($rs)
	{
		$s ="<div class='table-responsive'>";
		$s .= "<table class='table table-striped'>";
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
			$s .= "<td><a class='btn btn-info'>Update</a></td>";
			$s .= "<td><a class='btn btn-danger'>Delete</a></td>";
			$s .= "</tr>";
		}



		$s .= "</table></div>";

		echo $s;
	}
?>
