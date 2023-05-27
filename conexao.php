<?php //session_start();

	$servidor = "dpg-choob6ndvk4goes22ijg-a";
	$usuario = "db_locadora_soyw_user";
	$senha = "ly5wVeiNtFt3OnypHBrwryYcbeyiL873";
	$db_name = "db_locadora_soyw";
	
	
	$conexao = pg_connect($servidor, $usuario, $senha, $db_name) or die('Banco de dados indisponível.');
	
	date_default_timezone_set("America/Manaus");
	
	$host_ip = $_SERVER['HTTP_SERVER'];
	
	$url = "http://".$host_ip."/locadora";

	$url_admin = "http://".$host_ip."/locadora/admin";

	
?>
