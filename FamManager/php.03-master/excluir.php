<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Escola Santa Paciência</title>
</head>
<body>
    <div class="container">
    <?php
        $mat = $_GET["mat"];

        include_once 'conexao.php';

        $sql = "DELETE FROM aluno WHERE mat=".$mat;

        if(mysqli_query($con, $sql)){
            echo "<p class='alert alert-success'>Aluno deletado com sucesso!</p>";
        }else{
            echo "<p class='alert alert-danger'>Erro ao deletar aluno.</p>";
        }
    ?>
    
    <a href="index.php">Página Inicial</a>
    </div>
</body>
</html>






