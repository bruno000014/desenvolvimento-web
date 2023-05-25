<?php //session_start();

$host = 'containers-us-west-122.railway.app';
$port = '8069';
$db   = 'railway';
$user = 'root';
$pass = 'IH17yp9oEYfqIdbXZVil';
$charset = 'utf8mb4';

	$conexao = mysqli_connect($host, $user, $pass, $port, $db) or die('Banco de dados indisponível.');
	
	$host_ip = $_SERVER['HTTP_HOST'];
	
	$url = "http://".$host_ip."/locadora";

	$url_admin = "http://".$host_ip."/locadora/admin";

	
?>
