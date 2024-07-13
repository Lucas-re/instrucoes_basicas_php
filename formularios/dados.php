<?php
/**
 *  recebendo os dados pelo metodo POST
 */

 $nome_post = $_POST['nome'];
 $email_post = $_POST['email'];

 if($nome_post && $email_post){
    echo "Seu nome é $nome_post e seu email é $email_post <br>";

    var_dump($_POST);
 }

/**
 *  recebendo os dados pelo metodo GET
 */

 $nome_get = $_GET['nome'];
 $email_get = $_GET['email'];

 if($_GET['idade'] && $_GET['sobrenome']){
    echo "{$_GET['idade']} anos e {$_GET['sobrenome']} é o meu sobrenome";
    
    var_dump($_GET);
 
 }

 if($nome_get && $email_get){
    echo "Seu nome é $nome_get e seu email é $email_get <br>";

    var_dump($_GET);
 }