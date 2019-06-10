<?php
$cadastraservico = ' <div class="container" style="margin-bottom:;">
   <form action="/php/servico/gravarservico.php" method="post" >
   <h3 style="text-align: center; color: black;">Cadastro de Serviços</h3>
  <div class="form-row">
    <div class="form-group col-sm-2">
      <label for="">Idservico</label>
      <input type="text" class="form-control" name="idservico" placeholder="IdPeça" style="height:32px;">
    </div>
    <div class="form-group col-sm-3">
      <label for="">Nome</label>
      <input type="text" class="form-control" name="nome" placeholder="Nome"style="height:32px;">
    </div>
    <div class="form-group col-sm-5">
      <label for="">Descrição</label>
      <input type="text" class="form-control" name="descricao" placeholder="Descrição"style="height:32px;">
    </div>
    <div class="form-group col-sm-2">
      <label for="">Valor</label>
      <input type="text" class="form-control"  name="valor" placeholder="Valor"style="height:32px;">
    </div>
    

</div>
<div class="form-row text-center">
 <div class="form-group col-sm-12">
 <input type="submit" onclick="funcao1()" class="btn  btn-sm btn-dark" value="Cadastrar">
</div>
       </div>
</form> 
    </div>
 ';
?>