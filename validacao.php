<?php

    if(isset($_POST['nome_login']) && !empty($_POST['nome_login'])){

        require 'conexao_2.php';
        require 'Usuario.class.php';
        $nome_login = addslashes($_POST['nome_login']);
        $senha_login = addslashes($_POST['senha_login']);

    }else{
        header("Location: admin/login/login.php");
    }

   

?>