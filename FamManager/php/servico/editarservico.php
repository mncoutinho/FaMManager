<?php
require_once 'sessao.php';
require_once '../html.php';
print($htmlhead);
?>

   <script>     
  function funcao1()
{
alert("O Registro Foi Gravado Com Sucesso!");
}
</script>  
  <section id="tudo">
    <div class="container">
       <?php
            $idservico = $_GET["idservico"];
        
            include_once 'conexao.php';
        
            $sql = "SELECT * FROM servico WHERE idservico=".$idservico;
        
            $result = mysqli_query($con,$sql);
        
            $linha = mysqli_fetch_array($result);
        ?>
       
        <div class="container" style="margin-bottom:;">
        <form action="atualizarservico.php" method="post" >
   <h3 style="text-align: center; color: black;">Atualizar Serviço</h3>
  <div class="form-row">
    <div class="form-group col-sm-2">
      <label for="">IdPeça</label>
      <input type="text" class="form-control" name="idservico" placeholder="IdPeça" style="height:32px;" value="<?php echo $linha["idservico"];?>">
    </div>
    <div class="form-group col-sm-3">
      <label for="">Nome</label>
      <input type="text" class="form-control" name="nome" placeholder="Nome"style="height:32px;" value="<?php echo $linha["nome"];?>">
    </div>
    <div class="form-group col-sm-5">
      <label for="">Descrição</label>
      <input type="text" class="form-control"  name="descricao" placeholder="Valor"style="height:32px;" value="<?php echo $linha["descricao"];?>">
    </div>
    <div class="form-group col-sm-2">
      <label for="">Valor</label>
      <input type="text" class="form-control"  name="valor" placeholder="Quantidade"style="height:32px;" value="<?php echo $linha["valor"];?>">
    </div>

</div>
<div class="form-row text-center">
 <div class="form-group col-sm-12">
 <input type="submit" class="btn  btn-sm btn-dark" onclick="funcao1()" value="Atualizar">
</div>
       </div>
</form> 
    </div>
    </div>

</section> 
<?php print($htmlfooter);