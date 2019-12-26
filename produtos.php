<?php
	include("function.php");
?>
<html>
	<head>
		<title>Gerenciamento de produtos</title>
		<link href="css/ip1.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="corpo-form">
			<form method="post" action="CC.php">
				<a href="VisualizarProdutos.php"> <input type="button" value="Visualizar Produtos"></a>
				<a href="CadastrarProdutos.php"> <input type="button" value="Cadastrar Produtos"></a>
				<?php
					Voltar_Interface_Principal();
				?>
			</form>
		</div>
	</body>
</html>