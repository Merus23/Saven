<?php
	session_start();
?>
<html>
	<head>
		<title>Cadastro</title>
		<link href="ip1.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="corpo-form">
			<form method="post" action="cad.php">
				<h2>Insera teus dados</h2>
				<?php
					if($_SESSION['usuario_existe'] == true){
						echo "<h3>";
						echo "Email cadastrado, por favor escolha outro!";
						echo "</h3>";
					}
					unset($_SESSION['usuario_existe']);
				?>
				
				<h3></h3>
				<input type="text" name="email" placeholder="Insira um email." required> </br></br>
				<input type="password" name="senha" placeholder="Insira uma senha." required> </br></br>
			
							
				</br></br>
				<input type="submit" value="Cadastrar">
			</form>
		</div>
	</body>
</html>