<?php
include_once '../../conexao.php';        
include_once 'postCliente.php';
include_once 'queryIncluirCliente.php';
    if(mysqli_query($con, $sql)){
    echo "<script>alert('Cliente Cadastrado!'), window.open('../../cadastrarcliente.php','_self');</script>";          header ('location: ../../cadastrarcliente.php?nome=' );
         die();  
}else{
    echo "Erro ao gravar Cliente. <br>";
    echo "Erro: ".mysqli_error($con);        header ('location: ../../cadastrarcliente.php?nome=' );
         die();
}

?>
