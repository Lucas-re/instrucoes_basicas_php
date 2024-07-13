<?php

/**
 *  variaveis superglobais são variaveis pré-definidas do php
 *  isso significa que elas estão sempre acessiveis independente do escopo
 */

/**
 * $GLOBALS
 * $_SERVER
 * $_POST
 * $_GET
 * $_FILES
 * $_ENV
 * $_REQUEST
 * $_COOKIE
 * $_SESSION
 */

/**
 *  A variavel $GLOBALS é utilizada para acessar variaveis globais
 *  de qualquer lugar do script php 
 *  ela armazena todas as variaveis globais em um array chamado $GLOBALS
 */

 $x = 10;
 $y = 20;

 function soma(){
    echo $GLOBALS['x'] + $GLOBALS['y'];
 }

 soma();
 print("<hr>");


/**
 *  A variavel $_SERVER é uma super global que contém informações sobre cabeçalhos 
 *  caminhos, locais de script e muitas outras informações sobre o servidor
 *  ela é um array que contém varios indices 
 */

 echo $_SERVER['PHP_SELF']; // ira retornar o nome do arquivo de script que esta sendo executado
 echo "<br>";

 //var_dump("<pre>",$_SERVER,"</pre>");


/**
 *  A variaveis globais $_POST e $_GET são utilizadas para coletar dados de formularios
 *  utilizamos como indice para acessar os dados o nome dos atributos name das tags input 
 *  do html do nosso formulario
 */

 $nome = $_POST['nome'];
 $email = $_POST['email'];

 echo "Seu nome é $nome e seu email é $email <br>";

 $nome = $_GET['nome'];
 $email = $_GET['email'];

 echo "Seu nome é $nome e seu email é $email <br>";