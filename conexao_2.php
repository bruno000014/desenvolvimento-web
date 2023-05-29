<?php

    $host = "aws.connect.psdb.cloud";
    $user = "2zxpjklkmlbh5waf37g1";
    $senha = "pscale_pw_sHJTuYNYDFxw72ia0alzOURpm5miKTOxfd6mr7JfJjx";
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