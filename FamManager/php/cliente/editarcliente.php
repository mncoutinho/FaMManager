
<?php $script = ' <script>     
  function funcao1()
{
alert("O Registro Foi Gravado Com Sucesso!");
}
</script> ';
require_once '../../sessao.php';
require_once '../html.php';
include_once '../../conexao.php';
print($htmlhead.$script);   
    $cpf = $_GET["cpf"];
        
            
        
            $sql = "SELECT * FROM cliente WHERE cpf=".$cpf;
        
            $result = mysqli_query($con,$sql);
        
            $linha = mysqli_fetch_array($result);

?>
  
  <div class="container">
        
  <div style="margin: 5px"></div>
   <div class="container">
   <form class="responsive" action="atualizarcliente.php" method="post" >
    <h3 style="text-align: center; color: black;">Editar de Clientes</h3>
  <div class="form-row">
    <div class="form-group col-sm-2">
      
      <input type="text" class="form-control " name="id" id="inputEmail4" placeholder="IdCliente" value="<?php echo $linha["idcliente"];?>" style="height:32px;" disabled>
    </div>
    <div class="form-group col-sm-6">
      
      <input type="text" class="form-control" id="" name="nome" placeholder="NOME"style="height:32px;"value="<?php echo $linha["nome"];?>">
    </div>
    <div class="form-group col-sm-4">

      <input type="int" class="form-control" id="" name="cpf" placeholder="CPF"style="height:32px;"value="<?php echo $linha["cpf"];?>">
    </div>
       </div>
    <div class="form-row">
    <div class="form-group col-sm-2">
      
      <input type="tel" class="form-control" id="" name="telefone" placeholder="TELEFONE"style="height:32px;" value="<?php echo $linha["telefone"];?>">
    </div>
    <div class="form-group col-sm-2">
      
      <input type="int" class="form-control" id="" name="celular" placeholder="CELULAR"style="height:32px;" value="<?php echo $linha["celular"];?>">
    </div>
  <div class="form-group col-sm-6">
    
    <input type="text" class="form-control" id="" name="endereco" placeholder="ENDEREÇO"style="height:32px;" value="<?php echo $linha["endereco"];?>">
  </div>
  <div class="form-group col-sm-2">
    
    <input type="int" class="form-control" id="" name="numero" placeholder="NÚMERO"style="height:32px;" value="<?php echo $linha["numero"];?>">
     </div>
     </div>
     <div class="form-row">
   <div class="form-group col-sm-12">
    
    <input type="text" class="form-control" id="" name="referencia" placeholder="REFERÊNCIA"style="height:32px;" value="<?php echo $linha["referencia"];?>">
  </div>
       </div>
       
       <div class="form-row">
    <div class="form-group col-sm-3">
      
      <input type="int" class="form-control" id="" name="cep" placeholder="CEP"style="height:32px;" value="<?php echo $linha["cep"];?>">
    </div>
    <div class="form-group col-sm-4">
      <input type="text" class="form-control" id="" name="bairro" placeholder="BAIRRO"style="height:32px;"value="<?php echo $linha["bairro"];?>">
    </div>
    <div class="form-group col-sm-4">
      
      <input type="text" class="form-control" id="" name="municipio" placeholder="MUNICÍPIO"style="height:32px;" value="<?php echo $linha["municipio"];?>">
    </div>
    <div class="form-group col-sm-1">
      
      <select id="inputState" class="form-control" style="height:32px;">
        <option value="">RJ</option>
        <option value="">AC</option>
        <option value="">AL</option>     
        <option value="">AM</option>
        <option value="">AP</option>
        <option value="">BA</option>
        <option value="">CE</option>
        <option value="">DF</option>
        <option value="">ES</option>
        <option value="">GO</option>
        <option value="">MA</option>
        <option value="">MT</option>
        <option value="">MS</option>
        <option value="">MG</option>
        <option value="">PA</option>
        <option value="">PB</option>
        <option value="">PR</option>
        <option value="">PE</option>
        <option value="">PI</option>
        <option value="">RN</option>
        <option value="">RS</option>
        <option value="">RO</option>
        <option value="">RR</option>
        <option value="">SC</option>
        <option value="">SP</option>
        <option value="">SE</option>
        <option value="">TO</option>
      </select>
      </div>
       </div>
<div class="form-row text-center">
 <div class="form-group col-sm-12">
  <button type="submit" class="btn btn-dark" >Salvar</button>
</div>
       </div>
</form> 
    </div>
    </div>   
     <?php 

print($htmlfooter);?>