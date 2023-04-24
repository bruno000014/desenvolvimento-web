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
        <a href="">Sair</a>
   </nav>
   <main id="conteudo">
    <form id="form_cadastro" name="form_cadastro" class="form_cadastro" method="post">
    
    <h1>Cadastro de Veículo</h1>
    <div class="agrupamento_cadastro">
            <div>
                <div>Marca</div>
                <div><input type="text" id="marca" name="marca" requerid autofocus></div>
                <div>Modelo</div>
                <div><input type="text" id="modelo" name="modelo" requerid autofocus></div>
                <div>Ano</div>
                <div><input type="text" id="ano" name="ano" requerid autofocus></div>
                <div>Descrição do Veiculo</div>
                <div><input type="text" id="descricao" name="descricao" requerid autofocus></div>
                <div><input type="submit" id="btn_cadastar" name="btn_cadastrar" value="Cadastrar"></div>
            </div>

    </div>


    </form>
   </main>

    
   <script type="text/javascript" src="../../menu/menu.js"></script>
</body>
</html>