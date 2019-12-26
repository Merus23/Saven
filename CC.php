<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="ip1.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="corpo-form">
		<?php
			session_start();
			include("conexao.php");
			include("function.php");
			
			$nome = mysqli_real_escape_string ($conexao, $_POST["nome"]); 
			$matricula = mysqli_real_escape_string ($conexao, $_POST["matricula"]); 
			$serie = mysqli_real_escape_string ($conexao, $_POST["serie"]);
			$curso = mysqli_real_escape_string ($conexao, $_POST["curso"]);
				
			$result_clientes = "INSERT INTO cliente (nome, matricula, serie, curso) VALUES ('$nome', '$matricula', '$serie', '$curso')";
			$resultado_clientes = mysqli_query($conexao, $result_clientes);
				
			if(mysqli_insert_id($conexao)){
				header("Location:CadastrarClientes.php");
			}else{
				header("Location:VisualizarClientes.php");
			}
					 
			$conexao -> close();
			exit;
		?>
	</div>
</body>
</html>
