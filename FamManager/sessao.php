<?php
//conexão
require_once 'db_connect.php';
//sessão
session_start();
// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: index.php');
endif;
//dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id ='$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);

?>