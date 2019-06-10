
    <?php
        $cpf = $_GET["cpf"];
        include_once '../../conexao.php';
        $sql = "DELETE FROM cliente WHERE cpf=".$cpf;
        $result = "";
        if(mysqli_query($con, $sql)){
            $result = 'ok';header("location:consultacliente.php?result=".$result);
        }else{
           $result = 'error';
        }
        
         
    ?>
    
