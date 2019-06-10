s       <?php

        include_once 'postServico.php';
        include_once 'queryIncluirServico.php';
        include_once '../../conexao.php';

        
        if(mysqli_query($con, $sql)){
            echo "<p class='alert alert-success'>Gravado com sucesso!</p>";
        }else{
            echo "<p class='alert alert-danger'>Erro ao gravar!</p>";
        } 


        header ('location: ../../cadastraservico.php?nome=' );
         die();


        ?>
 