<?php
/**
 *  conexão com banco de dados
 */
 /**
  * arquivo criado para fazer a conexão com o banco de dados
  * utilizando o metodo pg_ para se conectar ao banco postgres
  */
 $servername = "localhost";
 $port = "5432";
 $username = "postgres";
 $password = "1234";
 $db_name = "curso_php";
 
 $connect = pg_connect("host={$servername} port={$port} dbname={$db_name} user={$username} password={$password}");
 pg_set_client_encoding($connect, "utf8");

//  if(!$connect):
//      echo "Não foi possivel estabelecer a conexão com o banco de dados";
//  else:
//      echo "Conexão realizada com sucesso!";
//  endif;

