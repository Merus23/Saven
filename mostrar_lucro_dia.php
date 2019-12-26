<!DOCTYPE html>
<html>
	<head>
		<title>Mostrar lucro do dia</title>
		<link rel="stylesheet" type="text/css" href="css/grafico.css">
	</head>
	<body>
		<div id="corpo-form">
			<?php
			
				include('conexao.php');
				include('function.php');	

				$now = date("d-m");
				$login = $_SESSION['login'];
							
				$mostrar_financas = "SELECT lucro_dia, total_vendido_fiado, total_pago FROM usuario WHERE email = '$login'";
				$sql = mysqli_query($conexao, $mostrar_financas);
				
				echo "<table id='mais_espaco'>";
					while($row_mf = mysqli_fetch_assoc($sql)){
						echo "<tr>";
							echo "<th>";
								echo "Lucro total do dia "; 
							echo "</th>";
							echo "<th>";
								echo "Total vendido (fiado)"; 
							echo "</th>";
							echo "<th>";
								echo "Total recebido (pagamento)"; 
							echo "</th>";
							echo "<th>";
								echo "Data de hoje"; 
							echo "</th>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>";
								echo $row_mf['lucro_dia'];
							echo "</td>";
							echo "<td>";
								echo $row_mf['total_vendido_fiado'];
							echo "</td>";
							echo "<td>";
								echo $row_mf['total_pago'];
							echo "</td>";
							echo "<td>";
								echo $now;
							echo "</td>";
							
						echo "</tr>";

					}
				echo "</table>";
				voltar_financa();
			?>
		</div>
	</body>
</html>