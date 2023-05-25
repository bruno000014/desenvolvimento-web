<?php require('../../conexao.php');

	
	//VERIFICANDO DADOS PARA ATUALIZAR
	if (isset($_POST['codigo_carro'])) {

		$codigo_carro = $_POST['codigo_carro'];      
	
		$marca = $_POST['marca'];

        $modelo = $_POST['modelo'];

        $ano = $_POST['ano'];

        $descricao = $_POST['descricao'];

		$tipo_carro = $_POST['tipo_carro'];


		$update_carro = "UPDATE carro SET marca = '".$marca."', modelo = '".$modelo."', ano = '".$ano."', descricao = '".$descricao."', tipo_carro = '".$tipo_carro."'WHERE codigo_carro = $codigo_carro";
	
	
		if (mysqli_query($pdo,$update_carro)) {

				mysqli_close($pdo);

				echo "<script> alert ('CARRO ATUALIZADO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/veiculos/consultar.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL ATUALIZAR.');</script>";

				echo "<script> window.location.href='$url_admin';</script>";
				
				mysqli_close($pdo);
			}

	}else if (isset($_POST['marca'])) {      
	
		$marca = $_POST['marca'];

        $modelo = $_POST['modelo'];

        $ano = $_POST['ano'];

        $descricao = $_POST['descricao'];

		$tipo_carro = $_POST['tipo_carro'];


		$insert_carro = "INSERT INTO carro (marca, modelo, ano, descricao, tipo_carro) VALUES ('".$marca."', '".$modelo."', '".$ano."','".$descricao."','".$tipo_carro."')";
	
	
		if (mysqli_query($pdo,$insert_carro)) {

				mysqli_close($pdo);

				echo "<script> alert ('CARRO CADASTRADO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/veiculos/consultar.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR.');</script>";

				echo "<script> window.location.href='$url_admin';</script>";
				
				mysqli_close($pdo);
			}

	} 

?>