<?php
$servidor = "localhost";
$usuario = "root";
$senha = "12345";
$db_name = "locadora";

$conexão = mysqli_connect($servidor, $usuario, $senha, $db_name) or die( 'Banco de dados Indisponivel.');

date_default_timezone_set("America/Manaus");

$host_ip = $_SERVER['HTTP_HOST'];

$url = "http://".$host_ip."/projeto locadora"; 

$url_admin = "http://".$host_ip."/projeto locadora/admin";

//$url_aluno = "http://".$host_ip."/portal/aluno";



?>