<?php //session_start();

	$username = 'root';
	$password = 'IH17yp9oEYfqIdbXZVil';
	
	try {
		$conexao = new PDO('mysql:host=containers-us-west-122.railway.app;dbname=railway', $username, $password);
		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  } catch(PDOException $e) {
		  echo 'ERROR: ' . $e->getMessage();
	  }

	date_default_timezone_set("America/Manaus");	
	
	$host_ip = $_SERVER['containers-us-west-122.railway.app'];
	
	$url = "http://".$host_ip."/locadora";

	$url_admin = "http://".$host_ip."/locadora/admin";

	
?>
