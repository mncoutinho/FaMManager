<?php
//conexão
require_once 'db_connect.php';

//sessão
session_start();

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: index.php');
endif;

//dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id ='$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);


        
        $idservico  = $_POST["idservico"];
        $nome       = $_POST["nome"];
        $descricao  = $_POST["descricao"];
        $valor      = $_POST["valor"];

        include_once 'conexao.php';

        $sql = "UPDATE servico SET nome='{$nome}', 
        descricao='{$descricao}', valor='{$valor}' WHERE idservico=".$idservico;
        
        if(mysqli_query($con, $sql)){
            echo "<p class='alert alert-success'>Atualizado com sucesso!</p>";
        }else{
            echo "<p class='alert alert-danger'>Erro ao atualizar!</p>";
        } 
        
        
        header ('location: consultaservico.php?nome=' );
         die();
        
        ?>