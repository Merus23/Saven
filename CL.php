<?php
	session_start();
	include("conexao.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$pesquisa_nome = mysqli_real_escape_string ($conexao, $_POST["pesquisa_nome"]);
		$valor = mysqli_real_escape_string ($conexao, $_POST["valor"]);
		$forma = mysqli_real_escape_string ($conexao, $_POST["forma"]);
		
		$nome_cliente = mysqli_query($conexao, "SELECT nome FROM cliente");
		$now = date('Y/m/d', time());
		
		$debito_anterior = mysqli_query($conexao, "SELECT debito FROM cliente WHERE nome = '$pesquisa_nome'");
		while($da = mysqli_fetch_assoc($debito_anterior)){
			$da["debito"];
			if($forma == 1){
				$valor = $valor * (-1);
				$valor = $valor + $da["debito"];
			}else{
				$valor = $valor + $da["debito"];
			}
		}

		
		while($row_nome_cliente  = mysqli_fetch_assoc($nome_cliente)){
			if($row_nome_cliente['nome'] == $pesquisa_nome){
				$test = $row_nome_cliente['nome'];
				
				$sql = "UPDATE cliente SET debito =('$valor'), data_compra=('$now'), Ultima_operacao=('$forma') WHERE nome ='$test' ";
				$result_debito = mysqli_query($conexao, $sql);
			}	
			header("Location: VisualizarClientes.php");
		}
		
	?>
</body>
</html>
