<?php
	session_start();
	if(!$_SESSION['usuario']){
		header('location: InterfacePrincipal.php');
		
		exit();
	}
	/*Por enquanto eu vou deixar o interface principal seu um verificador
	*/
	
?>