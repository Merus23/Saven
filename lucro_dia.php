<?php
	include("function.php");
?>
<html>
	<head>
		<title>Finanças</title>
		<link href="css/ip1.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		
			<div id="corpo-form">
				<h3>Lucro do dia</h3>
				<form method="post" action="calcular_lucro_dia.php">
					<input placeholder="Informe a quantidade(em reais) à vender." name="TotalDia" type="text" required>
					
					
					<input value="Calcular Lutro do dia" type="submit">
				</form>
				<?php 
					Voltar_Financa();
				 ?>
				
			</div>
	</body>

</html>