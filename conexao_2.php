<?php

    $host = "localhost";
    $user = "root";
    $senha = "";
    $banco = "db_locadora";

    global $pdo;

    try{
        $pdo = new PDO("mysql:dbname=".$banco."; host=".$host, $user, $senha);
        $pdo->setAttribute(PDO::AFTER_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "ERRO: ".$e->getMessage();
        exit;
    }

?>