<?php require('../menu.php');

	require('../../conexao.php');


	$codigo_carro = $_GET['codigo_carro'];

	$delete_carro = "DELETE FROM carro WHERE codigo_carro = $codigo_carro";
	
	
		if (mysqli_query($conexao,$delete_carro)) {

				mysqli_close($conexao);

				echo "<script> alert ('CARRO EXCLUÍDO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/veiculos/consultar.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL EXCLUIR.');</script>";

				echo "<script> window.location.href='$url_admin';</script>";
				
				mysqli_close($conexao);
			}
	

?>