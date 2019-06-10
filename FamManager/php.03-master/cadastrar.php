<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Escola Santa Paciência</title>
</head>
<body>
    <div class="container">
        <h3>Cadastrar Aluno</h3>
        <form action="gravar.php" method="post" style="width:300px">
            Nome: <input type="text" name="nome" class="form-control">
            
            E-mail: <input type="email" name="email" class="form-control">
            
            Telefone: <input type="tel" name="telefone" class="form-control">
            <br>
            <input type="submit" class="btn btn-success" value="Cadastrar">
        </form>  
        <br>
        <a href="index.php">Página Inicial</a>
    </div>
</body>
</html>