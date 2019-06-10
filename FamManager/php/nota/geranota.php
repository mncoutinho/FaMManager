<?php
$geranota = '<form class="form-control container" action="gravarnota.php" method="post">

       <legend style="text-align: center;">Nota</legend>
  <div class="form-row">
    <div class="form-group col-sm-3">
      <input disabled type="text"  name="idnota" class="form-control" id="" placeholder="IdNota">
    </div>
    <div class="form-group col-sm-3">
      <input type="date" name="dataentrada" placeholder="Data de Entrada" class="form-control">
    </div>
    <div class="form-group col-sm-3">
      <input type="date" name="agendada" class="form-control" id="agendada" placeholder="Data Agendada">
      </div>
<div class="form-group col-sm-3">
     <select class="form-control" id="" placeholder="Situação" name="status"  class="form-group">
          <option >Aberto</option>
          <option >Em Andamento</option>
          <option >Fechada</option>
          <option >Cancelada</option>
      </select>
    </div>
    <div class="form-group col-sm-12">
      <input type="text" name="observacoes" class="form-control"  placeholder="Observações">
    </div>
    </div>
    <legend style="text-align: center;">CLIENTES</legend>
    <div class="form-row">
      <div class="form-group col-sm-1">
      <input type="number" class="form-control" name="idcliente"  placeholder="IdCliente" disabled>
    </div>
    <div class="form-group col-sm-8">
      <input type="text" class="form-control" name="nome" id="" placeholder="Nome">
    </div>
    <div class="form-group col-sm-3">
      <input type="number" class="form-control" name="cpf" id="" placeholder="CPF">
    </div>
       </div>
       <div class="form-row">
      <div class="form-group col-sm-2">
      <input type="tel" class="form-control" name="telefone"  placeholder="Telefone">
    </div>
    <div class="form-group col-sm-2">
      <input type="tel" class="form-control" name="celular" id="" placeholder="Celular">
    </div>
    <div class="form-group col-sm-7">
      <input type="text" class="form-control" name="endereco" id="" placeholder="Endereço">
    </div>
      <div class="form-group col-sm-1">
      <input type="number" class="form-control" name="numero" id="" placeholder="N˚">
    </div>
       </div>
       <div class="form-row">
      <div class="form-group col-sm-12">
      <input type="text" class="form-control" name="referencia"  placeholder="Referência">
    </div>
       </div>
       <div class="form-row">
      <div class="form-group col-sm-2">
      <input type="number" class="form-control" name="cep"  placeholder="CEP">
    </div>
    <div class="form-group col-sm-5">
      <input type="text" class="form-control" name="bairro" id="" placeholder="Bairro">
    </div>
      <div class="form-group col-sm-4">
      <input type="text" class="form-control" name="municipio" id="" placeholder="Município">
    </div>
      <div class="form-group col-sm-1">
      <select id="inputState" placeholder="UF" class="form-control" name="uf">
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
       <legend style="text-align: center;"><a><i class="fas fa-plus-circle"></i></a>PEÇA</legend>
  <div class="form-row">
    <div class="form-group col-sm-1">
      <input type="text"  name="idpeca" class="form-control" id="" placeholder="IdPeça">
    </div>
    <div class="form-group col-sm-5">
      <input type="text"  name="nomepeca" class="form-control" id="" placeholder="Nome da Peça">
    </div>
     <div class="form-group col-sm-1">
      <input type="number" name="valorpeca" class="form-control" id="" placeholder="Valor Unitário">
    </div>
     <div class="form-group col-sm-1">
      <input type="number" name="quantidadepeca" class="form-control" id="" placeholder="Quantidade">  
    </div>
       </div>
       <legend style="text-align: center;"><a><i class="fas fa-plus-circle"></i></a>SERVIÇO</legend>
  <div class="form-row">
    <div class="form-group col-sm-1">
      <input type="text"  name="idservico" class="form-control" id="" placeholder="IdServiço">
    </div>
    <div class="form-group col-sm-5">
      <input type="text"  name="nomeservico" class="form-control" id="" placeholder="Nome do Serviço">
    </div>
    <div class="form-group col-sm-1">
      <input type="number"  name="quantidadeservico" class="form-control" id="" placeholder="Quantidade">
    </div>
     <div class="form-group col-sm-2">
      <input type="number" name="valorservico" class="form-control" id="" placeholder="Valor">
    </div>
       </div>   
   <div class="form-row text-center">
 <div class="form-group col-sm-12">
 <br>
  <button type="submit" onclick="funcao1()" class="btn btn-dark"  >CADASTRAR</button>
       </div>
</div>
    
    </form>
    <div style="margin: 100px"/>';
?>