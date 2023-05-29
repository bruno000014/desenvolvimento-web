<?php

    $host = "dpg-choob6ndvk4goes22ijg-a";
    $user = "db_locadora_soyw_user

    ";
    $senha = "ly5wVeiNtFt3OnypHBrwryYcbeyiL873";
    $banco = "db_locadora_soyw

    ";

    global $pdo;

    try{
        $pdo = new PDO("mysql:dbname=".$banco."; host=".$host, $user, $senha);
        $pdo->setAttribute(PDO::AFTER_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "ERRO: ".$e->getMessage();
        exit;
    }

?>