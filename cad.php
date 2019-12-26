<?php
	session_start();
	include ("conexao.php");
	$_SESSION['usuario_existe'] = false;
	$email = mysqli_real_escape_string ($conexao, $_POST["email"]); 
	$senha = mysqli_real_escape_string ($conexao, md5($_POST["senha"])); 
	//As variáveis com 1 são referentes ao cadastro, as outras são referentes ao login
	
	
		
		
		$sql = "select count(*) as total from usuario where email = '$email'";
		$result = mysqli_query($conexao, $sql);
		$row = mysqli_fetch_assoc($result);
		
		if($row['total'] == 1){
			$_SESSION['usuario_existe'] = true;
			header('Location: Cadastro.php');
			exit;
		}else{
			$result_usuario = "INSERT INTO usuario (email, senha) VALUES ('$email', '$senha')";
			$resultado_usuario = mysqli_query($conexao, $result_usuario);
			header('Location: login.php');
		}
		
		mysqli_close($conexao);
		
	
	echo $email;
	echo $senha;
				
?>