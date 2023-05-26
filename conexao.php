<?php //session_start();
	require ('.env')
	
	$host = getenv('DB_HOST');
	$port = getenv('DB_PORT');
	$database = getenv('DB_DATABASE');
	$username = getenv('DB_USERNAME');
	$password = getenv('DB_PASSWORD');

// Conexão com o banco de dados
$conexao = new mysqli($host, $username, $password, $database, $port);

// Verificar a conexão
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}


	date_default_timezone_set("America/Manaus");	
	
	$host_ip = $_SERVER['MYSQLHOST'];
	
	$url = "http://".$host_ip."/locadora";

	$url_admin = "http://".$host_ip."/locadora/admin";

	
?>
