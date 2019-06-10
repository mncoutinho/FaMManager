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
        
            $sql = "SELECT * FROM aluno WHERE mat=".$mat;
        
            $result = mysqli_query($con,$sql);
        
            $linha = mysqli_fetch_array($result);
        ?>
        <h3>Editar Aluno</h3>
        <form action="atualizar.php" method="post" style="width:300px">
           <input type="hidden" name="mat" class="form-control" value="<?php echo $linha["mat"];?>">
           
            Nome: <input type="text" name="nome" class="form-control" value="<?php echo $linha["nome"];?>">
            
            E-mail: <input type="email" name="email" class="form-control" value="<?php echo $linha["email"];?>">
            
            Telefone: <input type="tel" name="telefone" class="form-control"  value="<?php echo $linha["telefone"];?>">
            <br>
            <input type="submit" class="btn btn-success" value="Atualizar">
        </form>  
        <br>
        <a href="index.php">Página Inicial</a>
    </div>
</body>
</html>