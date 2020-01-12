<html>
	<head>
		<title>Visualizar Clientes</title>
		<link href="css/grafico.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="corpo-form">
			<h3>Clientes Cadastados</h3>
			<?php
				include("conexao.php");
				include("function.php");

				$result_cliente = mysqli_query($conexao, "SELECT * FROM cliente");			
				//$resultado_clientes = mysqli_query($conexao, $result_cliente);
				echo "<table>";
				while($row_cliente = mysqli_fetch_assoc($result_cliente)){
					
						echo "<tr>";
							echo "<th>";
								echo "Nome"; 
							echo "</th>";
							echo "<th>";
								echo "Matricula"; 
							echo "</th>";
							echo "<th>";
								echo "Serie"; 
							echo "</th>";
							echo "<th>";
								echo "Curso"; 
							echo "</th>";
							echo "<th>";
								echo "Débito"; 
							echo "</th>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>";
								echo $row_cliente['nome'];
							echo "</td>";
							echo "<td>";
								echo $row_cliente['matricula'];
							echo "</td>";
							echo "<td>";
								echo $row_cliente['serie'];
							echo "</td>";
							echo "<td>";
								echo $row_cliente['curso'];
							echo "</td>";
							echo "<td>";
								echo $row_cliente['debito'];
							echo "</td>";
						echo "</tr>";
				}
				echo "</table>";
			?>
			<a href="delete_cliente.php"><input type="button" value="Deletar Cliente"></a>
			<?php
				Voltar_Cliente();
			?>
		</div>
	</body>

</html>