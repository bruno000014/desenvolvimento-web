<?php //session_start();
	$db_url = "mysql://root:IH17yp9oEYfqIdbXZVil@containers-us-west-122.railway.app:8069/railway"
	$servidor = "containers-us-west-122.railway.app";
	$usuario = "root";
	$senha = "IH17yp9oEYfqIdbXZVil";
	$db_name = "railway";


	$conexao = mysqli_connect($db_url, $servidor, $usuario, $senha, $db_name) or die('Banco de dados indisponível.');

	date_default_timezone_set("America/Manaus");	
	
	$host_ip = $_SERVER['HTTP_HOST'];
	
	$url = "http://".$host_ip."/locadora";

	$url_admin = "http://".$host_ip."/locadora/admin";

	
?>
