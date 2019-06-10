<?php
//conexão
require_once 'db_connect.php';
//sessão
session_start();
//btn
if(isset($_POST['btn-entrar'])):
   $erros = array();
   $login = mysqli_escape_string($connect, $_POST['login']);
   $senha = mysqli_escape_string($connect, $_POST['senha']);
   
  if(empty($login)or empty($senha)):
       $erros[] = "o campo não foi preenchido" ;
       else:
      $sql = "SELECT login FROM usuarios WHERE login = '$login' " ; 
      $resultado = mysqli_query($connect, $sql); 
      
		if(mysqli_num_rows($resultado) > 0):
		$senha = md5($senha);       
		$sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
		$resultado = mysqli_query($connect, $sql);
               if(mysqli_num_rows($resultado) == 1):
				$dados = mysqli_fetch_array($resultado);
				mysqli_close($connect);
				$_SESSION['logado'] = true;
				$_SESSION['id_usuario'] = $dados['id'];
				header('Location: home.php');
			else:
				$erros[] = "<li> Usuário e senha não conferem </li>";
			endif;
		else:
			$erros[] = "<li> Usuário inexistente </li>";
		endif;

	endif;

endif;
?>
<!DOCTYPE html>

<html lang="pt-br">


<meta charset="UTF-8">

<title>Document</title>


<head>
    <title>Página de Login</title>
    <link href="css/stylelogin.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Reset Password Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!--google fonts-->

    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="element">
        <div class="logo">
            <img src="logo_fam.gif"” alt="">
        </div>
        <div class="element-main">

            <h1>
                <p>Login</p>
            </h1>
            <?php
        if(!empty($erros)):
            foreach ($erros as $erro):
                echo $erro;
            endforeach;
        endif;
        ?>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" action="verificaLogin.php" method="POST">

                <div class="put"><input type="text" value="Usuário" name="login" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Usuário';}"></div>
                <div class="put"><input type="password" placeholder="Senha" name="senha" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Senha';}"></div>

                <input type="submit" name="btn-entrar" value="Entrar">
            </form>
        </div>
    </div>
</body>

</html>
