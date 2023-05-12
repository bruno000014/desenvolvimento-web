<?php require('../menu.php');

    require('../../conexao.php');


	    $select_carro = mysqli_query($conexao, "SELECT * FROM carro ORDER BY codigo_carro ASC");
				
	
		    if (mysqli_num_rows($select_carro) > 0) {
			
			    $codigo_carro = mysqli_fetch_assoc($select_carro);
			
		    } else {
			
			    echo "<script> alert ('NÃO EXISTEM CURSOS CADASTRADOS!');</script>";
				
			    echo "<script> window.location.href='$url_admin';</script>";
			
			
		    }
        


?>
   
<main>
            <div class="estila_tabela">

                <div><h1>CARROS CADASTRADOS</h1></div>
                    <table>
                        
                        <tr class="tabela_cabecalho">

                            <td>CÓDIGO</td>
                            <td>MARCA</td>
                            <td>MODELO</td>
                            <td>ANO</td>
                            <td>DESCRICAO</td>
                            <td>TIPO DE VEICULO</td>
                            
                            <td colspan="2">AÇÃO</td>

                        </tr>



                    <?php do{


                        ?>
        
                        <tr>

                            <td><?php echo $codigo_carro['codigo_carro'];?></td>
                            <td><?php echo $codigo_carro['marca'];?></td>
                            <td><?php echo $codigo_carro['modelo'];?></td>
                            <td><?php echo $codigo_carro['ano'];?></td>
                            <td><?php echo $codigo_carro['descricao'];?></td>
                            <td><?php echo $codigo_carro['tipo_carro'];?></td>
                            <td>

                                <a href="atualizar.php?codigo_carro=<?php echo $codigo_carro['codigo_carro'];?>">
                                    <img src="../../imagens/botoes/editar.png" class="botao_acao" title="Editar">
                                </a>
                            </td>

                            <td>

                                <a href="javascript:func()" onclick="confirmar_exclusao('<?php echo $codigo_carro['codigo_carro'];?>')">
                                    <img src="../../imagens//botoes/excluir.png" class="botao_acao" title="Excluir">
                                </a>
                            </td>
                            
                        </tr>

                    <?php }while ($codigo_carro = mysqli_fetch_assoc($select_carro));?>

                    </table>
                
            </div>
    
   <script type="text/javascript" src="../../menu/menu.js"></script>
   <script>
             function confirmar_exclusao(codigo_carro) {
                         
                         var resposta = confirm("Deseja continuar com a exclusão?");
                         
                         if (resposta == true) {
                         
                              window.location.href = "remover.php?codigo_carro="+codigo_carro;
                         }
                    }
         </script>
</main>
</body>
</html>