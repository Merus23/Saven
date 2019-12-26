<html>
	<head>
		<title>Visualizar Produtos</title>
		<link href="css/grafico.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="corpo-form">
			<h3>Seus Produtos</h3>
			<?php
				include("conexao.php");
				include("function.php");
				$result_produto = mysqli_query($conexao, "SELECT  * FROM produto");			
				//$resultado_protudo = mysqli_query($conexao, $result_produto);
				
				echo "<table>";
				while($row_produto = mysqli_fetch_assoc($result_produto)){
						echo "<tr>";
							echo "<th>";
								echo "Código";
							echo "</th>";
							echo "<th>";
								echo "Nome";
							echo "</th>";
							echo "<th>";
								echo "Preço";
							echo "</th>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>";
								echo $row_produto['codigo'];
							echo "</td>";
							echo "<td>";
								echo $row_produto['nome'];
							echo "</td>";
							echo "<td>";
								echo $row_produto['valor'];
							echo "</td>";
						echo "</tr>";
				}
				echo "</table>";
			?>
			
			<a href="delete_produto.php"><input type="button" value="Deletar podutos"></a>
			<?php
				Voltar_Produto();
			?>
		</div>
	</body>
</html>