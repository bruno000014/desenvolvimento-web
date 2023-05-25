<?php //session_start();

	$servidor = "containers-us-west-132.railway.app";
	$usuario = "root";
	$senha = "GBrR82U3nUmqiboGbxKM";
	$db_name = "railway";
	
	
	$conexao = mysqli_connect($servidor, $usuario, $senha, $db_name) or die('Banco de dados indisponível.');
	
	date_default_timezone_set("America/Manaus");
	
	$host_ip = $_SERVER['HTTP_HOST'];
	
	$url = "http://".$host_ip."/locadora";

	$url_admin = "http://".$host_ip."/locadora/admin";

	
?>
