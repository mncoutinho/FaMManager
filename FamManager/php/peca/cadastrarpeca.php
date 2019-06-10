 <?php 
$script = " <script>
        function excluir(id){
            if(confirm('Deseja realmente excluir este cliente?')){
                location.href = 'excluirpeca.php?id=' + id;   
            }
        }
    </script>";
$cadastrapeca = '
<div class="container" style="margin-bottom:;">
   <form action="/php/peca/gravarpeca.php" method="post" >
   <h3 style="text-align: center; color: black;">Cadastro de Peças</h3>
  <div class="form-row">
       <div class="form-group col-sm-7"> 
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" style="height:32px;">
      </div>
      
      <div class="form-group col-sm-2">
      <input type="text" class="form-control" id="valor" name="valor" placeholder="Valor" style="height:32px;">
      </div>
   
        <div class="form-group col-sm-2">
      <input type="text" class="form-control" id="quantidade" name="quantidade" placeholder="Quantidade" style="height:32px;">
      </div>
    <div class="form-group col-sm-1">
 <input type="submit" onclick="funcao1()" class="btn  btn-sm btn-dark" value="Cadastrar">
      </div>
 
</div>

</form> 
    </div>';
?>