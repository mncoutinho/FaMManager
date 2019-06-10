<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$db_name = "sistemalogin";
$connect = mysqli_connect($servername, $username, $password, $db_name);
if(mysqli_connect_error()):
    echo "falha na conexão: ". mysqli_connect_error();
endif;
?>

