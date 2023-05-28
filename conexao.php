<?php

	$host = "aws.connect.psdb.cloud";
	$usuario = "kea1agnb8ukfk26ftjo6";
	$senha = "pscale_pw_dTcD6oCDULmFoDFdIBBwbyvTBa3mYiYbumQZklbLQmp";
	$db_name = "db_locadora";

	$mysqli = mysqli_init();
  	$mysqli->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
  	$mysqli->real_connect($host, $usuario, $senha, $db_name);

	date_default_timezone_set("America/Manaus");
	
	$host_ip = $_SERVER['HTTP_HOST'];
	
	$url = "http://".$host_ip."/locadora";

	$url_admin = "http://".$host_ip."/locadora/admin";

	
?>


