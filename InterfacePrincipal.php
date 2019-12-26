<?php

	include('verifica_login.php');
	unset($_SESSION['usuario']);
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Interface Principal</title>
		<link href="css/ip1.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
			<div id="corpo-form">
				<a href="Cliente.php"><input value=" Gerenciamento de Clientes" type="button"></a>
				<a href="produtos.php"><input value="Gerenciamento de Produtos" type="button"></a>
				<a href="financas.php"><input value="Finanças" type="button"></a>
				<a href="log_off.php"><input value="Sair" type="button"></a>
			</div>
	</body>

</html>