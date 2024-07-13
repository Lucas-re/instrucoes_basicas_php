<?php
ini_set('display_errors', 1);

/**
 *  aqui no arquivo exibindo_sessoes.php estamos exibindo o valor e o id
 *  da sessão que foi criada no arquivo session_start.php. 
 */

session_start();

echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>".session_id();