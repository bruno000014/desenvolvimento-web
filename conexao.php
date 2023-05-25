<?php //session_start();

	$servidor = "containers-us-west-27.railway.app";
	$usuario = "root";
	$senha = "rYH5C45Jozz5Ffsz6STm";
	$db_name = "railway";


	 // Conexão BD Postgres com PDO
	 $conexao = new PDO("$servidor, $usuario, $senha, $dbname")or die ('Banco de dados indisponivel');
	
	$host_ip = $_SERVER['HTTP_HOST'];
	
	$url = "http://".$host_ip."/locadora";

	$url_admin = "http://".$host_ip."/locadora/admin";

	
?>
