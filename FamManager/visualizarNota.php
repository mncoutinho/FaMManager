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
 

   <form action="gravarnota.php" method="post">
   <?php
            $idnota = $_GET["idnota"];
        
            include_once 'conexao.php';
        
            $sql = "SELECT * FROM nota WHERE idnota=".$idnota;
        
            $result = mysqli_query($con,$sql);
        
            $linha = mysqli_fetch_array($result);
        ?>
<div class="container" name="caixanota">
       <legend style="text-align: center;">Nota</legend>
  <div class="form-row">
    <div class="form-group col-sm">
      <label for="inputEmail4">IdNota</label>
      <input disabled type="text"  name="idnota" class="form-control" id="" placeholder="IdNota" value="<?php echo $linha["idnota"];?>">
    </div>
    <div class="form-group col-sm">
      <label for="inputPassword4">Data De Entrada</label>
      <input disabled type="date" name="dataentrada" class="form-control" id="dataentrada" value="<?php echo $linha["dataentrada"];?>" >
    </div>
    <div class="form-group col-sm">
      <label for="inputPassword4">Agendada Para</label>
      <input disabled type="date" name="agendada" class="form-control" id="agendada" placeholder="" value="<?php echo $linha["agendada"];?>">
    
      </div>
<div class="form-group col-sm">
      <label for="exampleFormControlSelect1">Status</label>
     <select disabled class="form-control" id=""  name="statu"  class="form-group" value="<?php echo $linha["statu"];?>">
          <option >Aberto</option>
          <option >Em Andamento</option>
          <option >Fechada</option>
      </select>
    </div>
    <div class="form-group col-sm-12">
      <label for="">Observações</label>
      <input disabled type="text" name="observacoes" class="form-control"  placeholder="" value="<?php echo $linha["observacoes"];?>">
    </div>
    </div>
       </div>
       
       
       
       
       
       
       
    <div class="container" name="caixacliente">
    <legend style="text-align: center;">CLIENTES</legend>
    <div class="form-row">
      <div class="form-group col-sm-4">
      <label for="inputEmail4">IdCliente</label>
      <input disabled type="text" class="form-control" name="idcliente"  placeholder="IdCliente" value="<?php echo $linha["idcliente"];?>">
    </div>
    <div class="form-group col-sm-5">
      <label for="inputPassword4">NOME</label>
      <input disabled type="text" class="form-control" name="nome" id="" placeholder="NOME" value="<?php echo $linha["nome"];?>">
    </div>
    <div class="form-group col-sm-3">
      <label for="inputPassword4">CPF</label>
      <input disabled type="text" class="form-control" name="cpf" id="" placeholder="CPF" value="<?php echo $linha["cpf"];?>">
    </div>
       </div>
       
       <div class="form-row">
      <div class="form-group col-sm-3">
      <label for="inputEmail4">Telefone</label>
      <input disabled type="text" class="form-control" name="telefone"  placeholder="Telefone" value="<?php echo $linha["telefone"];?>">
    </div>
    <div class="form-group col-sm-3">
      <label for="inputPassword4">Celular</label>
      <input disabled type="text" class="form-control" name="celular" id="" placeholder="Celular" value="<?php echo $linha["celular"];?>">
    </div>
    <div class="form-group col-sm-4">
      <label for="inputPassword4">Endereço</label>
      <input disabled type="text" class="form-control" name="endereco" id="" placeholder="Endereço" value="<?php echo $linha["endereco"];?>">
    </div>
      <div class="form-group col-sm-2">
      <label for="inputPassword4">Número</label>
      <input disabled type="text" class="form-control" name="numero" id="" placeholder="Número" value="<?php echo $linha["numero"];?>">
    </div>
       </div>
       
       <div class="form-row">
      <div class="form-group col-sm-12">
      <label for="inputEmail4">Referência</label>
      <input disabled type="text" class="form-control" name="referencia"  placeholder="Referência" value="<?php echo $linha["referencia"];?>">
    </div>
       </div>
       
       <div class="form-row">
      <div class="form-group col-sm-3">
      <label for="inputEmail4">CEP</label>
      <input disabled type="text" class="form-control" name="cep"  placeholder="CEP" value="<?php echo $linha["cep"];?>">
    </div>
    <div class="form-group col-sm-3">
      <label for="inputPassword4">Bairro</label>
      <input disabled type="text" class="form-control" name="bairro" id="" placeholder="Bairro" value="<?php echo $linha["bairro"];?>">
    </div>
      <div class="form-group col-sm-3">
      <label for="inputPassword4">Município</label>
      <input disabled type="text" class="form-control" name="municipio" id="" placeholder="Município" value="<?php echo $linha["municipio"];?>">
    </div>
      <div class="form-group col-sm-1">
      <label for="inputState">UF</label>
      <select disabled id="inputState" class="form-control" name="uf" value="<?php echo $linha["uf"];?>">
        <option value="RJ">RJ</option>
        <option value="AC">AC</option>
        <option value="AL">AL</option>     
        <option value="AM">AM</option>
        <option value="AP">AP</option>
        <option value="BA">BA</option>
        <option value="CE">CE</option>
        <option value="DF">DF</option>
        <option value="ES">ES</option>
        <option value="GO">GO</option>
        <option value="MA">MA</option>
        <option value="MT">MT</option>
        <option value="MS">MS</option>
        <option value="MG">MG</option>
        <option value="PA">PA</option>
        <option value="PB">PB</option>
        <option value="PR">PR</option>
        <option value="PE">PE</option>
        <option value="PI">PI</option>
        <option value="RN">RN</option>
        <option value="RS">RS</option>
        <option value="RO">RO</option>
        <option value="RR">RR</option>
        <option value="SC">SC</option>
        <option value="SP">SP</option>
        <option value="SE">SE</option>
        <option value="TO">TO</option>
      </select>
      </div>
       </div>
       </div>
       
       <div class="container" name="caixapeca">
       <legend style="text-align: center;">PEÇA</legend>
  <div class="form-row">
    <div class="form-group col-sm-3">
      <label for="">IdPeça</label>
      <input disabled type="text"  name="idpeca" class="form-control" id="" placeholder="IdPeça" value="<?php echo $linha["idpeca"];?>">
    </div>
    <div class="form-group col-sm-3">
      <label for="">Nome</label>
      <input disabled type="text"  name="nomepeca" class="form-control" id="" placeholder="Nome" value="<?php echo $linha["nomepeca"];?>">
    </div>
     <div class="form-group col-sm-3">
      <label for="inputPassword4">Valor</label>
      <input disabled type="text" name="valorpeca" class="form-control" id="" placeholder="Valor" value="<?php echo $linha["valorpeca"];?>">
    </div>
     <div class="form-group col-sm-3">
      <label for="inputPassword4">Quantidade</label>
      <input disabled type="text" name="quantidadepeca" class="form-control" id="" placeholder="Quantidade" value="<?php echo $linha["quantidadepeca"];?>"> 
    </div>
       </div>
       </div>
       
       
       <div class="container" name="caixaservico">
       <legend style="text-align: center;">SERVIÇO</legend>
  <div class="form-row">
    <div class="form-group col-sm-3">
      <label for="">IdServiço</label>
      <input disabled type="text"  name="idservico" class="form-control" id="" placeholder="IdServiço" value="<?php echo $linha["idservico"];?>">
    </div>
    <div class="form-group col-sm-3">
      <label for="">Nome</label>
      <input disabled type="text"  name="nomeservico" class="form-control" id="" placeholder="Nome" value="<?php echo $linha["nomeservico"];?>">
    </div>
    <div class="form-group col-sm-3">
      <label for="">Descrição</label>
      <input disabled type="text"  name="descricao" class="form-control" id="" placeholder="Descrição" value="<?php echo $linha["descricao"];?>">
    </div>
     <div class="form-group col-sm-3">
      <label for="inputPassword4">Valor</label>
      <input disabled type="text" name="valorservico" class="form-control" id="" placeholder="Valor" value="<?php echo $linha["valorservico"];?>">
    </div>
     
       </div>
       </div>
       
   
    
    </form>
    
 <?php print($htmlfooter);?>