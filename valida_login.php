<?php session_start();

	require('conexao.php');


	if (isset($_POST['nome_login'])) {      
	
		$nome_login = $_POST['nome_login'];
		$senha_login = $_POST['senha_login'];
	
		$consulta = $pdo->query("SELECT * FROM login where nome_login, senha_login;");


		if(mysqli_num_rows($consulta) > 0){
	
			$registros_login = mysqli_fetch_assoc($consulta);
				 
			$_SESSION['nome_completo_login'] = $registros_login['nome_completo_login'];
			$_SESSION['nome_login'] = $registros_login['nome_login'];
			$_SESSION['tipo_login'] = $registros_login['tipo_login'];


			$_SESSION['url'] = $url;
			$_SESSION['url_admin'] = $url_admin;
			$_SESSION['url_aluno'] = $url_cliente;
					
			
				if($_SESSION['tipo_login'] == 0){


					echo "<script> window.location.href='$url_admin';</script>";	


				}
			
		} else {

			echo "<script> alert('Erro ao fazer login. Tente novamente ou fale com o Administrador.');</script>";

			echo "<script> window.location.href='$url';</script>";
			
		}

	}

?> 