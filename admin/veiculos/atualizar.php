<?php require('../menu.php');
    require('../../conexao.php');


        $codigo_carro = $_GET['codigo_carro'];


        $select_carro = mysqli_query($conexao, "SELECT * FROM carro WHERE codigo_carro = $codigo_carro");
				
	
	        if (mysqli_num_rows($select_carro) > 0) {
			
		        $codigo_carro = mysqli_fetch_assoc($select_carro);
			
	        } else {
			
		        echo "<script> alert ('NÃO EXISTEM CARROS CADASTRADOS!');</script>";
				
		        echo "<script> window.location.href='$url_admin';</script>";
			
			
	    }
	
?>

   
   
   <main id="conteudo">
    <form id="form_atualizar" name="form_atualizar" class="form_atualizar" method="post" action="salvar.php">
    
    <h1>Atualizar Veiculo</h1>

        
    <div class="agrupamento_atualizar">
                        <div class="agrupamento_atualizar1">
                            <div><label>Codigo do veiculo</label></div>
                            <div><input type="text" id="veiculo" name="codigo_carro" value="<?php echo $codigo_carro['codigo_carro'];?>" readonly></div>
                            <div><label>Marca</label></div>
                            <div><input type="text" id="marca" name="marca" value="<?php echo $codigo_carro['marca'];?>" requerid autofocus></div>
                            <div><label>Modelo</label></div>
                            <div><input type="text" id="modelo" name="modelo" value="<?php echo $codigo_carro['modelo'];?>" requerid autofocus></div>
                        </div>
                        <div class="agrupamento_atualizar2">
                            <div><label>Ano</label></div>
                            <div><input type="text" id="ano" name="ano" value="<?php echo $codigo_carro['ano'];?>" requerid autofocus></div>
                            <div><label>Descrição do Veiculo</label></div>
                            <div><input type="text" id="descricao" name="descricao" value="<?php echo $codigo_carro['descricao'];?>"  requerid autofocus></div>
                            <label>Tipo do Veiculo</label>
                            <select name="tipo_carro" id="tipo_carro">
                            <option value="HATCH" name="hatch">HATCH</option>
                            <option value="SEDAN" name="sedan">SEDAN</option>
                            <option value="SEDAN PLUS" name="sedan_at">SEDAN PLUS</option>
                            </select>
                        </div>
                        
                        <input type="submit" id="btn_atualizar" name="btn_atualizar" value="Atualizar">
                

    </div>


    </form>
   </main>

   <script type="text/javascript" src="../../menu/menu.js"></script>
</body>
</html>