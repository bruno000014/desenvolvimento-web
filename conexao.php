<?php //session_start();
	
	$servidor = "containers-us-west-27.railway.app";
	$usuario = "postgres";
	$senha = "rYH5C45Jozz5Ffsz6STm";
	$db_name = "railway";


	$conexao = pg_connect($servidor, $usuario, $senha, $db_name) or die('Banco de dados indisponível.');

	date_default_timezone_set("America/Manaus");	
	
	$host_ip = $_SERVER['HTTP_HOST'];
	
	$url = "http://".$host_ip."/locadora";

	$url_admin = "http://".$host_ip."/locadora/admin";

	
?>
