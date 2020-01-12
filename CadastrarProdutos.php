<?php
	include('function.php');
?>
<html>
	<head>
		<title>Adicionar Produto</title>
		<link href="css/ip1.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="corpo-form">
			<form method="post" action="CP.php">
				<input type="number" name="codpro" placeholder="Insira o código do produto" required> </br></br>
				<input type="text" name="nompro" placeholder="Insira o nome do produto" required> </br></br>
				<input type="number" name="valpro" placeholder="Insira o valor do protudo (em reais)" required> </br></br>
							
				</br></br>
				<input type="submit" value="Cadastrar">
				<?php
					Voltar_Produto();
				?>
			</form>
		</div>
	</body>
</html>