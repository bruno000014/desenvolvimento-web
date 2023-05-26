<?php //session_start();
	
	$servidor = "dpg-cho2dog2qv295pt6kugg-a";
	$usuario = "db_locadora_user";
	$senha = "fxaoK5vNVmUtNbxeDlkw3SwPV059IHio";
	$db_name = "db_locadora";


	$conexao = mysqli_connect($servidor, $usuario, $senha, $db_name) or die('Banco de dados indisponível.');

	date_default_timezone_set("America/Manaus");	
	
	$host_ip = $_SERVER['MYSQLHOST'];
	
	$url = "http://".$host_ip."/locadora";

	$url_admin = "http://".$host_ip."/locadora/admin";

	
?>
