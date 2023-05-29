<?php

class Usuario{

    public functions login($nome_login, $senha_login){
        global $pdo;

        $sql = "SELECT * FROM WHERE nome_login = :nome_login AND senha_login = :senha_login";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("nome_login", $nome_login);
        $sql->bindValue("senha_login", $senha_login);
        $sql->execute();

    }
}
?>