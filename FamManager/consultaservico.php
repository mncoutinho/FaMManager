<?php
require_once 'sessao.php';
require_once 'php/html.php';

require_once 'php/servico/consultaservico.php';

print($htmlhead.$consultaservico.$consultaservicoscript);
?>

  
    <?php
            if(isset($_GET["nome"])){
                $nome = $_GET["nome"];
                include_once 'conexao.php';
                $sql = "SELECT * FROM servico WHERE nomeservico like '$nome%'";
                $result = mysqli_query($con,$sql);
                if(mysqli_num_rows($result) > 0){ ?>
                   <div style="margin-bottom:100px;" id="tabela">
                    <table style="width: 100%; " class="table table-striped table-dark table-responsive ">
                       <thead >
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>

                            <th>Valor</th>
                            <th>Atualizar</th>
                            <th>Excluir</th>
                        
                        </tr>
                        </thead>
                        <?php
                        while($row = mysqli_fetch_array($result)){?>
                              <tr>
                                  <td><?php echo $row["idservico"]?></td>
                                  <td><?php echo $row["nomeservico"]?></td>
                                  <td><?php echo $row["valor"]?></td>
                                  <td><a href="php/servico/editarservico.php?idservico=<?php echo $row['idservico']?>"><i class="fas fa-user-edit"></i></a></td>
                                  <td>
                                      <a href="php/servico/excluirservico.php?idservico=" onclick="excluir( <?php echo $row['idservico']; ?> )">
                                        <i class="fas fa-trash-alt"></i>
                                      </a>
                                   </td>
                        
                              </tr>
                        <?php } ?>
                    </table>
      </div>
                <?php } else { echo "Nenhum registro encontrado"; }
            } 
?>
 <?php

print($htmlfooter);?>
  