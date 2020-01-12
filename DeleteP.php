<?php
	include("conexao.php");
	
	$codpro = mysqli_real_escape_string ($conexao, $_POST["codpro"]); 
	$detele_produto = mysqli_query($conexao, "DELETE FROM produto WHERE codigo = '$codpro'") ;
	header('Location: VisualizarProdutos.php');
	
?>