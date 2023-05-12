<?php require('../menu.php');?>

   
    <form id="form_cadastro" name="form_cadastro" class="form_cadastro" method="post" action="salvar.php">
    
    <h1>Cadastro de Veículo</h1>

    
    <div class="agrupamento_cadastro">
                <div class="agrupamento_cadastro1">
                    <div>Marca</div>
                    <div><input type="text" id="marca" name="marca" requerid autofocus></div>
                    <div>Modelo</div>
                    <div><input type="text" id="modelo" name="modelo" requerid autofocus></div>
                    <div>Ano</div>
                <div><input type="text" id="ano" name="ano" requerid autofocus></div>
                </div>

                <div class="agrupamento_cadastro2">
                    <div>Descrição do Veiculo</div>
                    <div><input type="text" id="descricao" name="descricao" requerid autofocus></div>
                    <div><label>Tipo do Veiculo</label></div>
                    <div>
                        <select name="tipo_carro" id="tipo_carro">
                            <option value="HATCH" name="hatch">HATCH</option>
                            <option value="SEDAN" name="sedan">SEDAN</option>
                            <option value="SEDAN PLUS" name="sedan_at">SEDAN PLUS</option>
                        </select>
                    </div>
                    <div><input type="submit" id="btn_cadastar" name="btn_cadastrar" value="Cadastrar"></div>
                </div>
            </div>

    </div>


    </form>

    <script type="text/javascript" src="../../menu/menu.js"></script>
</body>
</html>