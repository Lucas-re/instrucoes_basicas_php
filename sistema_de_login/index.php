<?php
 ini_set('display_errors', 1);

 /**
  *  conexão
  *  importa o arquivo de conexão com o banco de dados
 */
 require_once("db_connect.php");

 /**
  * sessão 
  * inicia a sessão 
  */
 session_start();
  
 // botão enviar
 if(isset($_POST['btn-entrar'])):
    $erros = array();
    $login = pg_escape_string($connect, $_POST['login']);
    $senha = pg_escape_string($connect, $_POST['senha']);

    if(empty($login) or empty($senha)):
        $erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
    else:

        /**
         *  $sql armazena a string de consulta ao banco de dados,
         *  $resultado armazena o resultado da conexão e execução
         *  da consulta ao banco de dados.
         */
        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        $resultado = pg_query($connect, $sql); 

        if(pg_num_rows($resultado) > 0):
            
            /**
             *  metodo md5() pega a senha que o usuario digitou e
             *  criptografa
             */
            $senha = md5($senha);
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
            $resultado = pg_query($connect, $sql); 
            pg_close($connect);
            
            if(pg_num_rows($resultado) == 1):

                /**
                 *  se o usuario estiver logado, armazena os dados na global $_SESSION
                 *  depois o usuario e redirecionado para a pagina home.php
                 */
                $dados = pg_fetch_array($resultado);
                $_SESSION['logado'] = TRUE;
                $_SESSION['id_usuario'] = $dados['id'];
                header('location: home.php');  
            else:
                $erros[] = "<li> Usuario e senha não conferem </li>";
            endif;
        else:
            $erros[] = "<li> Usuario inexistente </li>"; 
        endif;
    endif;
 endif;
?>

<html>
    <head>
        <title>Login</title>
        <?php
            if(!empty($erros)):
                foreach($erros as $erro):
                    echo $erro;
                endforeach;
            endif;
        ?>
        <meta charset="utf8">
    </head>
    <body>
        <h1>Login</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST"> 
            Login: <input type="text" name="login"><br>
            Senha:<input type="password" name="senha"><br>
            <button type="submit" name="btn-entrar">Entrar</button>
        </form>
    </body>
</html>
