<?php
	session_start();
	include ("conexao.php");
	//include ("verifica_login.php");
	if(empty($_POST['email']) || empty($_POST['senha'])){
		header('Location: login.php');
		exit();
	}
	

	$email = mysqli_real_escape_string ($conexao, $_POST["email"]); 
	$senha = mysqli_real_escape_string ($conexao, md5($_POST["senha"])); 
	
	//$query = "SELECT email, senha FROM usuario WHERE email = '{$email}' AND senha = md5('{$senha}')";
	$query_Email = "SELECT email FROM usuario WHERE email = '{$email}'";
	$result_Email= mysqli_query($conexao, $query_Email);
	$row_Email = mysqli_num_rows($result_Email);
	//verifica se há algum email no banco de dados igual ao valor passado pelo usuario, caso haja, retornará a quantidade
	
	$query_Senha = "SELECT senha FROM usuario WHERE senha = '{$senha}'";
	$result_Senha= mysqli_query($conexao, $query_Senha);
	$row_Senha = mysqli_num_rows($result_Senha);
	//verifica se há algum senha no banco de dados igual ao valor passado pelo usuario, caso haja, retornará a quantidade
	
	if($row_Email == 1 && $row_Senha > 0){
		$_SESSION['usuario'] = TRUE;
		$_SESSION['login'] = $email;
		header('Location: InterfacePrincipal.php');
		exit();
	}else{
		unset($_SESSION['usuario']);
		//header('Location: login.php');
	}
	mysqli_close($conexao);
		
?>