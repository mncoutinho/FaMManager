<?php
$script =  "<script> function excluir(cpf){
            if(confirm('Deseja realmente excluir este cliente?')){
                console.log(cpf);
                location.href='/php/cliente/excluircliente.php?cpf=' + cpf;   
            }
        }    
  function funcao1()
{
alert('O Registro Foi Gravado Com Sucesso!');
}
</script>";
$consultacliente = '   <div class="container-fluid"><div> <div class="container">
   <form  >
   <h3 style="text-align: center; color: black;">Consulta de Clientes</h3>
  <div class="form-row">
   
   <div class="form-group col-sm-3"> 
      <input type="text" class="form-control" id="" name="nome" placeholder="Nome"style="height:32px;">
    </div>
    
    <div class="form-group col-sm-3">
     <input type="text" class="form-control" id="" name="cpf" placeholder="CPF" style="height:32px;">
    </div>
    
    <div class="form-group col-sm-3">
      <input type="tel" class="form-control" id="" name="telefone" placeholder="TELEFONE"style="height:32px;">
    </div>
      
      <div class="form-group col-sm-3">
  <input type="submit" class="btn btn-dark" value="Consultar">
  
</div>
       </div>

</form>
    ';

?>
   
