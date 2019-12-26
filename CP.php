<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="css/ip1.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="corpo-form">
		<?php
			include('function.php');
			//session_start();
			include("conexao.php");
			
			$codpro = mysqli_real_escape_string ($conexao, $_POST["codpro"]); 
			$nompro = mysqli_real_escape_string ($conexao, $_POST["nompro"]); 
			$valpro = mysqli_real_escape_string ($conexao, $_POST["valpro"]);
							
			$result_produto = "INSERT INTO produto (codigo, nome, valor) VALUES ('$codpro', '$nompro', '$valpro')";
			$resultado_produto = mysqli_query($conexao, $result_produto);
				
			if(mysqli_insert_id($conexao)){
				header("Location:CadastrarProdutos.php");
			}else{
				header("Location:VisualizarProdutos.php");
			}			
				
			echo $codpro;
			echo $nompro;
			echo $valpro;
			$conexao -> close();
		?>
	</div>
</body>
</html>