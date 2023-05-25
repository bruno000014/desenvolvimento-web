<?php //session_start();

	$servidor = "containers-us-west-122.railway.app";
	$usuario = "root";
	$senha = "IH17yp9oEYfqIdbXZVil";
	$db_name = "railway";



	 $conexao = new PDO("pgsql:host=containers-us-west-122.railway.app;port=;dbname=railway;user=root;password=IH17yp9oEYfqIdbXZVil");


	date_default_timezone_set("America/Manaus");
	
	$host_ip = $_SERVER['HTTP_HOST'];
	
	$url = "http://".$host_ip."/locadora";

	$url_admin = "http://".$host_ip."/locadora/admin";

	
?>
