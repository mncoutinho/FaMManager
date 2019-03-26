<?php
class Cliente{
    private $nomecliente;
    function setNome($nomecliente){
        $this-> nomecliente = $nomecliente;
    }
    function getNome(){
        return $this -> nomecliente;
    }
    private $idcliente;
      function setIdCliente($idcliente){
        $this-> idcliente = $idcliente;
    }
    function getIdCliente(){
        return $this -> idcliente;
    }
    private $cpf;
      function setCpf($cpf){
        $this-> cpf = $cpf;
    }
    function getcpf(){
        return $this -> cpf;
    }
    private $telefone1;  
    function setTelefone1($telefone1){
        $this-> telefone1 = $telefone1;
    }
    function getTelefone1(){
        return $this -> telefone1;
    }
    
    private $telefone2;
      function setTelefone2($teleofne2){
        $this-> teleofne2 = $telefone2;
    }
    function getTelefone2(){
        return $this -> telefone2;
    }
    private $endereco;
      function setEndereco($endereco){
        $this-> endereco = $endereco;
    }
    function getEndereco(){
        return $this -> endereco;
    }
    private $logradouro;
    function setLogradouro($logradouro){
        $this-> logradouro = $logradouro;
    }
    function getLogradouro(){
        return $this -> logradouro;
    }
    
    private $numend;
      function setNumEnd($numend){
        $this-> numend = $numend;
    }
    function getNumEnd(){
        return $this -> numend;
    }
    private $referencia;
      function setRefenrecia($referencia){
        $this-> referencia = $referencia;
    }
    function getReferencia(){
        return $this -> referencia;
    }
    private $uf;
      function setUF($uf){
        $this-> uf = $uf;
    }
    function getUF(){
        return $this -> uf;
    }
    private $cep;
      function setCep($cep){
        $this-> cep = $cep;
    }
    function getCep(){
        return $this -> cep;
    }
    private $bairro;
      function setBairro($bairro){
        $this-> bairro = $bairro;
    }
    function getBairro(){
        return $this -> bairro;
    }
    private $municipio;
      function SetMunicipio($municipio){
        $this-> municipio = $municipio;
    }
    function getMunicipio(){
        return $this -> municipio;
    }
    
};
class Servico{
    private $idservico;
      function setIdServico($idservico){
        $this-> idservico = $idservico;
    }
    function getIdServico(){
        return $this -> idservico;
    }
    private $nomeservico;
      function setNomeServico($nomeservico){
        $this-> nomeservico = $nomeservico;
    }
    function getNomeServico(){
        return $this -> nomeservico;
    }
    private $valorservico; 
    function setValorServico($valorservico){
        $this-> valorservico = $valorservico;
    }
    function getValorServico(){
        return $this -> valorservico;
    }
    
    
};
class Peca{
      private $idpeca;
      function setIdPeca($idpeca){
        $this-> idpeca = $idpeca;
    }
    function getIdpeca(){
        return $this -> idpeca;
    }
    private $nomepeca;
      function setNomePeca($nomepeca){
        $this-> nomepeca = $nomepeca;
    }
    function getNomePeca(){
        return $this -> nomepeca;
    }
    private $valorpeca;
      function setvalorPeca($valorpeca){
        $this-> valorpeca = $valorpeca;
    }
    function getValorPeca(){
        return $this -> valorpeca;
    }
    private $quantidade;
      function setQuantidade($quantidade){
        $this-> quantidade = $quantidade;
    }
    function getQuantidade(){
        return $this -> quantidade;
    }
};
class Nota{
   private $observacoes,$idnota,$dataentrada,$agendado,$status,$Cliente,$Servico,$Peca;
         function setObservacoes($observacoes){
        $this-> observacoes = $observacoes;
    }
    function getObservacoes(){
        return $this -> observacoes;
    }

      function setIdNota($idnota){
        $this-> idnota = $idnota;
    }
    function getNome(){
        return $this -> nomecliente;
    }

      function setDataEntrada($dataentrada){
        $this-> dataentrada = $dataentrada;
    }
    function getDataEntrada(){
        return $this -> dataentrada;
    }
  
      function setAgendado($agendado){
        $this-> agendado = $agendado;
    }
    function getAgendado(){
        return $this -> agendado;
    }
  
    function setStatus($status){
        $this-> status = $status;
    }
    function getStatus(){
        return $this -> status;
    }
    function getCliente(){
        return $this->Cliente;
    }
    function setCliente($cliente){
        $this->cliente = $cliente;
    }
    function getServico(){
        return $this->Servico;
    }
    function setServico($Servico){
        $this->servico = $Servico;
    }
};
?>