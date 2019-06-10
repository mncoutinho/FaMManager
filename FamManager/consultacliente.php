<?php
include_once 'sessao.php';
include_once 'php/html.php';
include_once 'php/cliente/consultacliente.php';
print($htmlhead);
print($consultacliente);
print($script);
      
    if(isset($_GET["result"])){
        if($result == "error")  
            echo "<p class='alert alert-danger'>Erro ao deletar cliente.</p>";
        else
           echo "<p class='alert alert-success'>Sucesso ao deletar cliente.</p>"; 
        
      }
      
            if(isset($_GET["nome"])){
                $nome = $_GET["nome"];
                include_once 'conexao.php';
                $sql = "SELECT nome, cpf, telefone FROM cliente WHERE nome like '$nome%'";
                $result = mysqli_query($con,$sql);
                if(mysqli_num_rows($result) > 0){ ?>
                    <table class="table table-striped">
                        <tr>
                            <th>Nome</th>
                            <th>Cpf</th>
                            <th>Telefone</th>
                            <th>Editar</th>
                            <th>Excluir</th>

                        </tr>
                        <?php
                        while($row = mysqli_fetch_array($result)){?>
                              <tr>
                                  <td><?php echo $row["nome"]?></td>
                                  <td><?php echo $row["cpf"]?></td>
                                  <td><?php echo $row["telefone"]?></td>
                    
                                  
                                  <td><a href="/php/cliente/editarcliente.php?cpf=<?php echo $row['cpf']?>"><i class="fas fa-user-edit">Editar</i></a></td>
                                  
                                 <td> 
                                  <a href="/php/cliente/excluircliente.php?cpf=" onclick="excluir(<?php echo $row['cpf']; ?>)">
                                          <i class="fas fa-trash-alt">excluir</i>
                                  </a>  
                                </td>
                        
                              </tr>
                        <?php } ?>
                    </table>
                <?php } else { echo "Nenhum registro encontrado"; }
            }
      
      ?>
<?php

print($htmlfooter);
?>