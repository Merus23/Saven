<?php
	include('conexao.php');
	session_start();
	$total_dia = mysqli_real_escape_string ($conexao, $_POST["TotalDia"]); 
	$valor_pago = 0;
	$valor_vendido = 0;

	$now = date('Y-m-d');
	$data_compra = mysqli_query($conexao, "SELECT data_compra, Ultima_operacao, debito FROM cliente");
	while($row_data_compra = mysqli_fetch_assoc($data_compra)){
		if ($row_data_compra['data_compra'] = $now && $row_data_compra['Ultima_operacao'] == 1) {
			$a = $row_data_compra['debito'];
			$valor_pago = $valor_pago + $a;
			$valor_pago = $valor_pago * (-1);
		}
		if ($row_data_compra['data_compra'] = $now && $row_data_compra['Ultima_operacao'] == 2) {
			$a = $row_data_compra['debito'];
			$valor_vendido = $valor_vendido + $a;

		}
	}
	$login = $_SESSION['login'];
	echo $login;
	




	$lucro_do_dia = $total_dia - $valor_vendido + $valor_pago;
	$sql = "UPDATE usuario SET lucro_dia=('$lucro_do_dia'), total_vendido_fiado=('$valor_vendido'), total_pago=('$valor_pago') WHERE email = '$login' ";
	$result = mysqli_query($conexao, $sql);
	header("Location: mostrar_lucro_dia.php");
	echo $lucro_do_dia;
?>
