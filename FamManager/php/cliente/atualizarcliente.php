
        <?php
        
include_once 'postCliente.php';
echo $cpf;
        include_once '../../conexao.php';
        $sql = "UPDATE cliente SET nomecliente=".$nome.", 
        telefone=".$telefone.", celular=".$celular." , endereco= ".$enderco." , numero = " .$numero." , referencia =".$referencia." , cep = ".$cep." , bairro ".$bairro." , municipio = " .$municipio. " , WHERE cpf= ".$cpf;
         
        if(mysqli_query($con, $sql)){
            echo "<p class='alert alert-success'>Atualizado com sucesso!</p>";  header ('location: ../../consultacliente.php?nome='.$nome );
         die();
        
        }else{
            echo "<p class='alert alert-danger'>Erro ao atualizar!</p>";  header ('location: ../../consultacliente.php?nome='.$nome );
         die();
        
        } 
        
       
        ?>