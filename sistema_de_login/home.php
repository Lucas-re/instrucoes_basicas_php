<?php
 ini_set('display_errors', 1);

 // conexão
 require_once("db_connect.php");

 // sessão
 session_start();

 /**
  * verificação para saber se o usuario chegou a página home.php
  * logado, se não redireciona o usuario para a pagina de login
  */
 if(!$_SESSION['logado']):
    header('location: index.php');
 endif;

 /**
  * pega os dadoa do usuario armazenado na global $_SESSION
  * efetua novamente a consulta dos dados do usuario
  */
 $id = $_SESSION['id_usuario'];
 $sql = "SELECT * FROM usuarios WHERE id = '$id'";
 $resultado = pg_query($connect, $sql);
 $dados = pg_fetch_array($resultado); 
 pg_close($connect);
?>
<html>
    <head>
        <title>Home</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Pagina restrita</h1>
        <h3>Olá <?php echo $dados['nome'];?></h3>
        <a href="logout.php"><button>Logout</button></a>
    </body>
</html>