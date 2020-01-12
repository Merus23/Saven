<html>
	<head>
		<title>Finanças</title>
		<link href="css/grafico.css" rel="stylesheet" type="text/css" />
		
	</head>
	<body>
		<div id="corpo-form">
			<h3>Tabela</h3>
			
			<?php 
				include("function.php");
				include("conexao.php");
				$table = mysqli_query($conexao, "SELECT nome, debito, data_compra FROM cliente");			
				$TotalDebito = 0;
				echo "<table>";	
					while($row_table = mysqli_fetch_assoc($table)){
						echo "<tr>";
							echo "<th>";
								echo "Nome";
							echo "</th>";
							echo "<th>";
								echo "Débito";
							echo "</th>";
							echo "<th>";
								echo "Data da Compra";
							echo "</th>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>";
								echo $row_table['nome'];
							echo "</td>";
							echo "<td>";
								echo $row_table['debito'];
							echo "</td>";
							echo "<td>";
								echo $row_table['data_compra'];
							echo "</td>";
						echo "</tr>";
						$a = intval($row_table['debito']);				
						$TotalDebito = $TotalDebito + $a;
					}
					echo "<tr>";
						echo "<th>";
							echo "Total";
						echo "</th>";
						echo "<th>";
							echo $TotalDebito;
						echo "</th>";
						echo "<th>";
							echo "";
						echo "</th>";

					echo "</tr>";

				echo "</table>";
				Voltar_Financa();
			?>
		
		</div>
	</body>

</html>