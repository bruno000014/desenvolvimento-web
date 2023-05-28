<?php

	$host = "containers-us-west-122.railway.app";
	$usuario = "root";
	$senha = "IH17yp9oEYfqIdbXZVil";
	$db_name = "railway";

	$conexao = mysqli_connect($host, $usuario, $senha, $db_name) or die ('Banco de dados indisponivel');
	
	$host_ip = $_SERVER['HTTP_HOST'];
	
	$url = "http://".$host_ip."/locadora";

	$url_admin = "http://".$host_ip."/locadora/admin";

	
?>


