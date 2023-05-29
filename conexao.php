<?php

	$host = 'containers-us-west-122.railway.app';
	$port = '8069';
	$db   = 'railway';
	$user = 'root';
	$pass = 'IH17yp9oEYfqIdbXZVil';
	$charset = 'utf8mb4';

	$options    = array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	  );

	$dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
	try {
    	$pdo = new \PDO($dsn, $user, $pass, $options);
} 	catch (\PDOException $e) {
    	throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

	
	
	$host_ip = $_SERVER['REMOTE_ADDR'];
	
	$url = "http://".$host_ip."/locadora";

	$url_admin = "http://".$host_ip."/locadora/admin";

	
?>


