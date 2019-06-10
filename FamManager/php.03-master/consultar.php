<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Escola Santa Paciência</title>
    <script>
        function excluir(mat){
            if(confirm('Deseja realmente excluir este aluno?')){
                location.href = 'excluir.php?mat=' + mat;   
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <h3>Consultar Alunos</h3>
        <form style="width:300px">
            <label>Nome: </label>
            <input type="text" name="nome" class="form-control">
            <br>
            <input type="submit" class="btn btn-info" value="Buscar">
        </form><hr>
        <?php
            if(isset($_GET["nome"])){
                $nome = $_GET["nome"];
                include_once 'conexao.php';
                $sql = "select * from aluno where nome like '$nome%'";
                $result = mysqli_query($con,$sql);
                if(mysqli_num_rows($result) > 0){ ?>
                    <table class="table table-striped">
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                        <?php
                        while($row = mysqli_fetch_array($result)){?>
                              <tr>
                                  <td><?php echo $row["nome"]?></td>
                                  <td><?php echo $row["email"]?></td>
                                  <td><?php echo $row["telefone"]?></td>
                                  <td><a href="editar.php?mat=<?php echo $row['mat']?>"><i class="fas fa-user-edit"></i></a></td>
  <td>
      <a href="#" onclick="excluir( <?php echo $row['mat']; ?> )">
          <i class="fas fa-trash-alt"></i>
      </a>
  </td>
                              </tr>
                        <?php } ?>
                    </table>
                <?php } else { echo "Nenhum registro encontrado"; }
            } ?> <br>
        <a href="index.php">Página Inicial</a>
    </div>
</body>
</html>