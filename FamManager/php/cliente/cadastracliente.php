<?php  
$cadastracliente = '<div style="margin: 5px"></div>
    <div class="container">
        <form class="responsive" action="php/cliente/gravarcliente.php" method="post" >
            <h3 style="text-align: center; color: black;">Cadastro de Clientes</h3>
            <div class="form-row">
                <div class="form-group col-sm-2">
                  <input type="text" class="form-control " name="id" id="inputEmail4" placeholder="IdCliente" style="height:32px;" disabled>
            </div>
                <div class="form-group col-sm-6">
                  <input type="text" class="form-control" id="" name="nome" placeholder="NOME" style="height:32px;">
                </div>
                <div class="form-group col-sm-4">
                  <input type="int" class="form-control" id="" name="cpf" placeholder="CPF" style="height:32px;">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-2">
                  <input type="tel" class="form-control" id="" name="telefone" placeholder="TELEFONE" style="height:32px;">
                </div>
                <div class="form-group col-sm-2">
                  <input type="number" class="form-control" id="" name="celular" placeholder="CELULAR" style="height:32px;">
                </div>
                <div class="form-group col-sm-6">
                    <input type="text" class="form-control" id="" name="endereco" placeholder="ENDEREÇO" style="height:32px;">
                </div>
                <div class="form-group col-sm-2">
                    <input type="number" class="form-control" id="" name="numero" placeholder="NÚMERO" style="height:32px;">
                 </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-12">
                    <input type="text" class="form-control" id="" name="referencia" placeholder="REFERÊNCIA" style="height:32px;">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-sm-3">
                  <input type="number" class="form-control" id="" name="cep" placeholder="CEP" style="height:32px;">
              </div>
              <div class="form-group col-sm-4">
                  <input type="text" class="form-control" id="" name="bairro" placeholder="BAIRRO" style="height:32px;">
              </div>
              <div class="form-group col-sm-4">
                  <input type="text" class="form-control" id="" name="municipio" placeholder="MUNICÍPIO" style="height:32px;">
              </div>
              <div class="form-group col-sm-1">
                  <select id="inputState" class="form-control" style="height:32px;">
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
            <div class="form-row text-center">
                <div class="form-group col-sm-12">
                     <button type="submit" class="btn btn-dark">CADASTRAR</button>
                </div>
           </div>
        </form> 
    </div> ';?>