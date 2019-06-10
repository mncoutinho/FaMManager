<?php

$tabela = '        <table class="table table-striped">
                        <tr>
                            <th>Nome</th>
                            <th>Cpf</th>
                            <th>Telefone</th>
                            <th>Editar</th>
                            <th>Excluir</th>

                        </tr>';
$tr = ' <tr>';
$tdnome = '<td>'.$row["nome"].'</td>';
 $tdcpf = '<td>'.$row["cpf"].'</td>';
  $tdtelefone = '<td>'.$row["telefone"].'</td>';
$tdeditar = '<td><a href="editarcliente.php?cpf='.$row['cpf'].'><i class="fas fa-user-edit"></i></a></td>';
  $tdexcluir= '
 <td> 
  <a href="#" onclick="excluir('.$row['cpf'].')">
          <i class="fas fa-trash-alt"></i>
  </a>  
</td>';

$trend =' </tr>';
 
$fechatabela = ' </table>';
?>