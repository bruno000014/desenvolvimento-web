<?php //session_start();
	
$servername = "containers-us-west-122.railway.app";
$username = "root";
$password = "IH17yp9oEYfqIdbXZVil";
$dbname = "railway";

// Cria a conexão
$conexao = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi estabelecida com sucesso
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Resto do seu código PHP...


	date_default_timezone_set("America/Manaus");	
	
	$host_ip = $_SERVER['HTTP_SERVER'];
	
	$url = "http://".$host_ip."/locadora";

	$url_admin = "http://".$host_ip."/locadora/admin";

	
?>
