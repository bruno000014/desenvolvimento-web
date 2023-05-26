<?php session_start();

	require('conexao.php');


	if (isset($_POST['nome_login'])) {      
	
		$nome_login = $_POST['nome_login'];
		$senha_login = $_POST['senha_login'];
	
		
	try {
    	$conexao = new PDO('mysql:host=containers-us-west-122.railway.app;dbname=railway', $username, $password);
    	$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    	$sql_valida_login = $conexao->query('SELECT * FROM login WHERE nome_login = ' . $conexao->quote($nome_login) and senha_login = .$conexao->quote($senha_login));

    	foreach($data as $row) {
        	print_r($row);
    	}
	} catch(PDOException $e) {
    	echo 'ERROR: ' . $e->getMessage();
	}
		
		if(mysqli_num_rows($sql_valida_login) > 0){
	
			$registros_login = mysqli_fetch_assoc($sql_valida_login);
				 
			$_SESSION['nome_completo_login'] = $registros_login['nome_completo_login'];
			$_SESSION['nome_login'] = $registros_login['nome_login'];
			$_SESSION['tipo_login'] = $registros_login['tipo_login'];


			$_SESSION['url'] = $url;
			$_SESSION['url_admin'] = $url_admin;

					
			
				if($_SESSION['tipo_login'] == 0){


					echo "<script> window.location.href='$url_admin';</script>";	


				}
			
		} else {

			echo "<script> alert('Erro ao fazer login. Tente novamente ou fale com o Administrador.');</script>";

			echo "<script> window.location.href='$url';</script>";
			
		}

	}

?> 