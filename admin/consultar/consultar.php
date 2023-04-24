<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B&C Rent a Car</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="shortcut icon" href="../../imagens/favicon.ico" type="image/x-icon">
</head>
<body>
   <header>
    <a href="#" class="btn_abrir" onclick="abrir_menu()">&#9776;</a>
   
   </header>
   <nav id="menu">
        <a href="#" onclick="fechar_menu()">&times;</a>
        <a href="../cadastro/cadastro.php">Cadastrar</a>
        <a href="../atualizar/atualizar.php">Atualizar</a>
        <a href="../remover/remover.php">Remover</a>
        <a href="../consultar/consultar.php">Consultar dados</a>
        <a href="#">Sair</a>
   </nav>
   <main id="conteudo">
   <form id="form_consultar" name="form_consultar" class="form_consultar" method="post">

   <h1>Consultar Dados do Veiculo</h1>
    
   <div class="agrupamento_consultar">
            <div>
                <div>Id do veiculo</div>
                <div><input type="text" id="veiculo" nome="veiculo" requerid><button><img src="../atualizar/search.png" width="15px" class="search"></button></div>
                <div>Marca</div>
                <div><input type="text" id="marca" name="marca" requerid autofocus></div>
                <div>Modelo</div>
                <div><input type="text" id="modelo" name="modelo" requerid autofocus></div>
                <div>Ano</div>
                <div><input type="text" id="ano" name="ano" requerid autofocus></div>
                <div>Descrição do Veiculo</div>
                <div><input type="text" id="descricao" name="descricao" requerid autofocus></div>
                <div><input type="submit" id="btn_cadastar" name="btn_cadastrar" value="Consultar"></div>
            </div>

        </div>



    </form>
   </main>

    
   <script type="text/javascript" src="../../menu/menu.js"></script>
</body>
</html>