<?php

	$host = "aws.connect.psdb.cloud";
	$usuario = "kea1agnb8ukfk26ftjo6";
	$senha = "pscale_pw_dTcD6oCDULmFoDFdIBBwbyvTBa3mYiYbumQZklbLQmp";
	$db_name = "db_locadora";

	$conexao = mysqli_connect($host, $usuario, $senha, $db_name) or die ('Banco de dados indisponivel');

	date_default_timezone_set("America/Manaus");
	
	$host_ip = $_SERVER['HTTP_HOST'];
	
	$url = "http://".$host_ip."/locadora";

	$url_admin = "http://".$host_ip."/locadora/admin";

	
?>


