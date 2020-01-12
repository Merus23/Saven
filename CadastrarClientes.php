2<?php
	include("function.php");
?>
<html>
	<head>
		<title>Gerenciamento de clientes</title>
		<link href="css/ip1.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="corpo-form">
			<form method="post" action="CC.php">
				<input type="text" name="nome" placeholder="Insira o nome do cliente." required> </br></br>
				<input type="text" name="matricula" placeholder="Insira a matricula." required> </br></br>
				
					<p>
						<select  name="serie" class="basic" >
							<option value="null" >Selecione a série do cliente</option>
							<option value="1" >Primeira</option>
							<option value="2" >Segunda</option>
							<option value="3" >Terceira</option>
						</select>
					</p>
				
					</br></br>
					<p>
						<select  name="curso"  class="basic" > 
							<option value="null">Selecione o curso</option>
							<option value="Informática para Internet">Informática para internet</option>
							<option value="Química">Química</option>
							<option value="Edificações">Edificações</option>
						</select>				
					</p>

			
				</br></br>
				<input type="submit" value="Cadastrar">
				<?php
						Voltar_Cliente();
				?>
			</form>
		</div>
	</body>
</html>