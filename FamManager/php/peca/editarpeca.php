<?php
require_once 'sessao.php';
require_once '../html.php';
print($htmlhead);?>
  
  <section id="tudo">  


    <div class="container">
       <?php
            $id = $_GET["id"];
        
            include_once 'conexao.php';
        
            $sql = "SELECT * FROM peca WHERE id=".$id;
        
            $result = mysqli_query($con,$sql);
        
            $linha = mysqli_fetch_array($result);
        ?>
       
        <div class="container" style="margin-bottom:;">
        <form action="atualizarpeca.php" method="post" >
   <h3 style="text-align: center; color: black;">Atualizar Peça</h3>
  <div class="form-row">
    <div class="form-group col-sm-2">
      <label for="">IdPeça</label>
      <input type="text" class="form-control" name="id" placeholder="IdPeça" style="height:32px;" value="<?php echo $linha["id"];?>">
    </div>
    <div class="form-group col-sm-6">
      <label for="">Nome</label>
      <input type="text" class="form-control" name="nome" placeholder="Nome"style="height:32px;" value="<?php echo $linha["nome"];?>">
    </div>
    <div class="form-group col-sm-2">
      <label for="">Valor</label>
      <input type="text" class="form-control"  name="valor" placeholder="Valor"style="height:32px;" value="<?php echo $linha["valor"];?>">
    </div>
    <div class="form-group col-sm-2">
      <label for="">Quantidade</label>
      <input type="text" class="form-control"  name="quantidade" placeholder="Quantidade"style="height:32px;" value="<?php echo $linha["quantidade"];?>">
    </div>

</div>
<div class="form-row text-center">
 <div class="form-group col-sm-12">
 <input type="submit"  class="btn  btn-sm btn-dark" value="Atualizar">
</div>
       </div>
</form> 
    </div>
    </div>

</section> 
<?php
print($htmlfooter);?>