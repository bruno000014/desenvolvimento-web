<?php session_start();

	if (!isset($_SESSION['nome_login'])) {	
	    
	    session_destroy();
	 
	    unset ($_SESSION['nome_login']);
	    unset ($_SESSION['tipo_login']);

		echo "<script> alert ('ERRO: É NECESSÁRIO FAZER LOGIN');</script>";
		
		echo "<script> window.location.href='http://localhost/locadora';</script>";

	}	

	if ($_SESSION['tipo_login'] <> 0) {

		echo "<script> alert('ERRO: VOCÊ NÃO TEM PERMISSÃO PARA ACESSAR ESTA PÁGINA!');</script>";					
		session_destroy();
	 
		unset ($_SESSION['nome_completo_login']);
		unset ($_SESSION['nome_login']);
		unset ($_SESSION['tipo_login']);

		unset ($_SESSION['url']);
		unset ($_SESSION['url_admin']);

		echo "<script> window.location.href='http://localhost/locadora';</script>";				

	} 


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B&C Rent a Car</title>
     <link rel="stylesheet" type="text/css" href="<?php echo $_SESSION['url']."/css/style.css";?>">
    
    <link rel="shortcut icon" href="../imagens/fav.ico" type="image/x-icon">

         <script type="text/javascript" src="../menu/menu.js">
             function confirmar_exclusao(codigo_carro) {
                         
                         var resposta = confirm("Deseja continuar com a exclusão?");
                         
                         if (resposta == true) {
                         
                              window.location.href = "remover.php?codigo_carro="+codigo_carro;
                         }
                    }
         </script>
</head>
<body>
   <header>
    
    <a href="#" class="btn_abrir" onclick="abrir_menu()">&#9776;</a>
    <div class="user"><img src="<?php echo $_SESSION['url']."/imagens/botoes/login.png";?>">
    <label><?php echo  $_SESSION['nome_completo_login'];?></label></div>
    
    
   
   </header>
   <nav id="menu">
        <a href="#" onclick="fechar_menu()">&times;</a>
        <a href="<?php echo $_SESSION['url_admin']."/veiculos/index.php";?>">Cadastrar</a>
        <a href="<?php echo $_SESSION['url_admin']."/veiculos/consultar.php";?>">Consultar dados</a>
        <a href="<?php echo $_SESSION['url']."/sair.php";?>">Sair</a>
   </nav>

   <script type="text/javascript" src="../menu/menu.js"></script>
   


   
