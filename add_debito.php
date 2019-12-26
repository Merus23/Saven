<?php
	include('conexao.php');
	include('function.php');
?>
<html>
	<head>
		<title>Lista de clientes em débito</title>
		<link rel="stylesheet" type="text/css" href="css/lista.css">
		<!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->

	</head>
	<body>
		
		<div id="corpo-form">
			<?php
				echo "<form method='POST' action='CL.php'>";
					echo "<input type='text' name='pesquisa_nome' placeholder='Informe o nome do cliente (Ex.: Mateus Silva)' required>";
					echo "<input type='number' name='valor' placeholder='Insira o valor do consumido pelo cliente (ou o valor pago)' required>";
					echo "<select name='forma'>";
						
						echo "<option value='1' class='option'>"; 
							echo "Adicionar pagamento";
						echo "</option>";
						
						echo "<option value='2'  class='option'>"; 
							echo "Adicionar dívida";
						echo "</option>";
					
					echo "</select>";
					echo "<input type='submit' value='Inserir'>";
				echo "</form>";

				Voltar_Cliente();
 			?>
 		</div>
	</body>
</html>