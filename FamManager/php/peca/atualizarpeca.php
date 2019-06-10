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


        
        $id         = $_POST["id"];
        $nome       = $_POST["nome"];
        $valor      = $_POST["valor"];
        $quantidade = $_POST["quantidade"];

        include_once 'conexao.php';

        $sql = "UPDATE peca SET nome='{$nome}', 
        valor='{$valor}', quantidade='{$quantidade}' WHERE id=".$id;
        
        if(mysqli_query($con, $sql)){
            echo "<p class='alert alert-success'>Atualizado com sucesso!</p>";
        }else{
            echo "<p class='alert alert-danger'>Erro ao atualizar!</p>";
        } 
        
        
        header ('location: consultapeca.php?nome=');
         die();
        
        ?>