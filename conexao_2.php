<?php

    $host = "containers-us-west-122.railway.app";
    $user = "root";
    $senha = "IH17yp9oEYfqIdbXZVil";
    $banco = "railway";

    global $pdo;

    try{
        $pdo = new PDO("mysql:dbname=".$banco."; host=".$host, $user, $senha);
        $pdo->setAttribute(PDO::AFTER_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "ERRO: ".$e->getMessage();
        exit;
    }

?>