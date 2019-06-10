<?php
require_once 'sessao.php';

        $idservico = $_GET["idservico"];
        include_once 'conexao.php';
        $sql = "DELETE FROM servico WHERE idservico=".$idservico;
        if(mysqli_query($con, $sql)){
            echo "<p class='alert alert-success'>Aluno deletado com sucesso!</p>";
        }else{
            echo "<p class='alert alert-danger'>Erro ao deletar aluno.</p>";
        }
        
         header ('location: consultaservico.php?nome=' );
         die();
    ?>
   
