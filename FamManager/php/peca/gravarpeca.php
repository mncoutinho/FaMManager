       <?php
        include_once 'postPeca.php';
        include_once 'queryIncluirPeca.php';
        include_once '../../conexao.php';
        if(mysqli_query($con, $sql)){
            echo "<spam class='alert alert-success'>Gravado com sucesso! <br> Peça: '{$nome}', valor: '{$valor}' e quantidade: {$quantidade}</spam>";
            header ('location: ../../cadastrapeca.php');
         die();
        }else{
            echo "<spam class='alert alert-danger'>Erro ao gravar!</spam>";
            header ('location: ../../cadastrapeca.php');
         die();
        }


?>
 