<?php
	session_start();
	function Voltar_Interface_Principal (){
		echo "<a href='InterfacePrincipal.php'>";
			echo "<input type='button' value='Voltar'>";
			$_SESSION['usuario'] = true;
		echo "</a>";
	}
	function Voltar_Cliente (){
		echo "<a href='cliente.php'>";
			echo "<input type='button' value='Voltar'>";
		echo "</a>";
	}
	function Voltar_Produto (){
		echo "<a href='produtos.php'>";
			echo "<input type='button' value='Voltar'>";
		echo "</a>";
	}
	function Voltar_Financa (){
		echo "<a href='financas.php'>";
			echo "<input type='button' value='Voltar'>";
		echo "</a>";
	}

?>