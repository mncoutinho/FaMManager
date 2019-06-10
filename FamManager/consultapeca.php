<?php
require_once 'sessao.php';
require_once 'php/peca/consultapeca.php';
include_once 'php/html.php';
include_once 'conexao.php';

print($htmlhead.$script.$consultapeca);

  
            if(isset($_GET["nome"])){
                $nome = $_GET["nome"];
              
                $sql = "SELECT * FROM peca WHERE nomepeca like '$nome%'";
                $result = mysqli_query($con,$sql);
                if(mysqli_num_rows($result) > 0){ ?>
                    <table class="table table-striped">
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Valor</th>
                            <th>Quantidade</th>
                            <th>Atualizar</th>
                            <th>Excluir</th>
                        
                        </tr>
                        <?php
                        while($row = mysqli_fetch_array($result)){?>
                              <tr>
                                  <td><?php echo $row["idpeca"]?></td>
                                  <td><?php echo $row["nomepeca"]?></td>
                                  <td><?php echo $row["valor"]?></td>
                                  <td><?php echo $row["quantidade"]?></td>
                                  <td><a href="editarpeca.php?id=<?php echo $row['idpeca']?>"><i class="fas fa-user-edit"></i></a></td>
                                  
                                  
                                  <td>
      <a href="#" onclick="excluirpeca( <?php echo $row['idpeca']; ?> )">
          <i class="fas fa-trash-alt"></i>
      </a>
  </td>
                                  
                                  
                        
                              </tr>
                        <?php } ?>
                    </table>
                <?php } else { echo "Nenhum registro encontrado"; }
            } 
      

print($htmlfooter);
      ?>
  