<?php //session_start();
	$db = "mysql -hcontainers-us-west-122.railway.app -uroot -pIH17yp9oEYfqIdbXZVil --port 8069 --protocol=TCP railway";
	$servidor = "containers-us-west-122.railway.app";
	$usuario = "root";
	$senha = "IH17yp9oEYfqIdbXZVil";
	$db_name = "railway";


	$conexao = mysqli_connect($servidor, $usuario, $senha, $db_name, $db) or die('Banco de dados indisponível.');

	date_default_timezone_set("America/Manaus");	
	
	$host_ip = $_SERVER['HTTP_HOST'];
	
	$url = "http://".$host_ip."/locadora";

	$url_admin = "http://".$host_ip."/locadora/admin";

	
?>
