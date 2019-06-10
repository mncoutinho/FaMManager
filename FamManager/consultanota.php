<?php
require_once 'sessao.php';
require_once 'php/html.php';

require_once 'php/nota/consultanota.php';
require_once 'php/nota/consultanotascript.php';
print($htmlhead.$consultanota.$script);

            if(isset($_GET["dataentrada"])){
                $dataentrada = $_GET["dataentrada"];
                include_once 'conexao.php';
                $sql = "SELECT * FROM nota";
                $result = mysqli_query($con,$sql);
                if(mysqli_num_rows($result) > 0){ ?>
                    <div style="padding-bottom:4px; width:100%;" id="tabela">
                    <table style="width: 100%; " class="table table-striped table-dark table-responsive-xl ">
                       <thead >
                        <tr>
                            <th>IdNota</th>
                            <th>Data de Entrada</th>
                            <th>Agendada Para</th>
                            <th>Status</th>
                            <th>Observações</th>
                            <th>Visualizar</th>
                    
                           
                        </tr>
                        </thead>
                        <?php
                        while($row = mysqli_fetch_array($result)){?>
                              <tr>
                                  <td><?php echo $row["idnota"]?></td>
                                  <td><?php echo $row["dataentrada"]?></td>
                                  <td><?php echo $row["agendada"]?></td>
                                  <td><?php echo $row["statu"]?></td>
                                  <td><?php echo $row["observacoes"]?></td>
                                  <td ><a style="color:white; margin-left: 20px;" href="visualizar.php?idnota=<?php echo $row['idnota']?>"><i class="far fa-eye"></i></a></td>
                
                                 
                        
                              </tr>
                        <?php } ?>
                    </table>
      </div>
                <?php } else { echo "Nenhum registro encontrado"; }
            } 

print($htmlfooter);?>
  