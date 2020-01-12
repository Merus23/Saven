<?php
	include("conexao.php");
		$nome_cliente = mysqli_real_escape_string ($conexao, $_POST["nome_cliente"]); 
		$detele_cliente = mysqli_query($conexao, "DELETE FROM cliente WHERE nome = '$nome_cliente'") ;
		header("Location: VisualizarClientes.php");
	
?>