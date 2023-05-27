<?php //session_start();

	$servidor = "containers-us-west-122.railway.app";
	$usuario = "root";
	$senha = "IH17yp9oEYfqIdbXZVil";
	$db_name = "railway";
	
	
	$conexao = mysqli_connect($servidor, $usuario, $senha, $db_name) or die('Banco de dados indisponível.');
	
	date_default_timezone_set("America/Manaus");
	
	$host_ip = $_SERVER['HTTP_SERVER'];
	
	$url = "http://".$host_ip."/locadora";

	$url_admin = "http://".$host_ip."/locadora/admin";

	
?>


postgres://db_locadora_soyw_user:ly5wVeiNtFt3OnypHBrwryYcbeyiL873@dpg-choob6ndvk4goes22ijg-a.oregon-postgres.render.com/db_locadora_soyw