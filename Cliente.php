<?php
	include("function.php");
?>
<html>
	<head>
		<title>Gerenciamento de clientes</title>
		<link href="css/ip1.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="corpo-form">
			<form method="post">
				<a href="VisualizarClientes.php"> <input type="button" value="Visualizar Clientes Cadastrados"></a>
				<a href="CadastrarClientes.php"> <input type="button" value="Cadastrar Clientes"></a>
				<a href="add_debito.php"> <input type="button" value="Gerenciar clientes"> </a>
				<!--<a href="InterfacePrincipal.php"> <input type="button" value="Voltar"></a>-->
				<?php
				Voltar_Interface_Principal();
				?>
			</form>
		</div>
	</body>
</html>