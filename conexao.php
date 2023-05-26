<?php //session_start();
	
	<?php
	$dsn = 'mysql:host=containers-us-west-122.railway.app;port=8069;dbname=railway';
	$dbh = new PDO($dsn, 'root', 'IH17yp9oEYfqIdbXZVil');
	?>

// Resto do seu código PHP...


	date_default_timezone_set("America/Manaus");	
	
	$host_ip = $_SERVER['HTTP_HOST'];
	
	$url = "http://".$host_ip."/locadora";

	$url_admin = "http://".$host_ip."/locadora/admin";

	
?>
