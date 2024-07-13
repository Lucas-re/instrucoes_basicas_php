<?php
/**
 *  as sessoes servem para armazenar informações que poderão ser utilizadas 
 *  em varias paginas
 *  
 *  geralmente utilizamos as sessoes para criar carrinho de compra, sistemas 
 *  de login. 
 */

/**
 *  no inicio de todas as paginas utilizamos o session_start() para iniciar
 *  uma sessão 
 */

/**
 *  aqui no arquivo session_start.php estamos criando/inicializando 
 *  essas duas sessões e exibindo o valor e o id. 
 */

session_start();

$_SESSION['cor'] = "Verde";
$_SESSION['carro'] = "Veloster";

echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>".session_id();