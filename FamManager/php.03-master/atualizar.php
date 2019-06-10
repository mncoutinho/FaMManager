<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
    <body class="container">

        <?php
        
        $mat        = $_POST["mat"];
        $nome       = $_POST["nome"];
        $email      = $_POST["email"];
        $telefone   = $_POST["telefone"];
        
        include_once 'conexao.php';
        $sql = "UPDATE aluno SET nome='{$nome}', 
        email='{$email}', telefone='{$telefone}' WHERE mat=".$mat;
        
        if(mysqli_query($con, $sql)){
            echo "<p class='alert alert-success'>Atualizado com sucesso!</p>";
        }else{
            echo "<p class='alert alert-danger'>Erro ao atualizar!</p>";
        } ?>
        <br>
        <a href="index.php">Página Inicial</a>
    </body>
</html>