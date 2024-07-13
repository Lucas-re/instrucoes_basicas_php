<?php
/**
 * um cookie é um arquivo criado pelo servidor no computador do usuario
 * para armazenar algumas informações 
 * 
 * ele é um simples arquivo de texto que pode ser visualizado pelo computador
 * 
 * para se criar um cookie utilizamos a função setcookie() passando os porametros:
 * nome do cookie, o valor dele, a validade desse cookie.
 */

 setcookie('user', 'Gabriel', time() + 3600);
 setcookie('email', 'teste@teste.com', time() + 3600);
 setcookie('ultima_pesquisa', 'tenis adidas', time() + 3600);

 var_dump($_COOKIE);

/**
 * para removermos o cookie utilizamos a mesma função setcookie(), porém agora
 * com o valor negativo na validade do cookie 
 */
 setcookie('user', 'Gabriel', time() - 3600);
 setcookie('email', 'teste@teste.com', time() - 3600);
 setcookie('ultima_pesquisa', 'tenis adidas', time() - 3600);

 var_dump($_COOKIE);
