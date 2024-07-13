<?php
/**
 *  password_hash é a maneira segura de gerar criptografia para senhas
 *  por ele gerar hashs aleatórios.
 *  
 *  ele aceita os parametros: senha que será criptografada, o algoritmo de criptografia, e 
 *  um array de opções
 * 
 *  no array de opções é passado o 'cost' que seria o custo e o valor desse custo, que por padrão é 10.
 *  o valor 10 já é um otimo custo beneficio porque, quanto maior o custo, mais seguro se torna o hash, porém 
 *  será necessaio mais recurso de hardware para gerar o hash
 */

 $senha = "123456";

 $options = [
    'cost' => 10
 ];
//  $senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);
//  echo "<b> password_hash: </b>".$senhaSegura;



/**
* para realizar a autenticação dessa senha usamos o metodo password_verify(), que recebe como parametro
* a senha que foi digitada pelo usuario e o hash da senha que foi salvo no banco de dados 
*/

 $senha_db = '$2y$10$U8eumc30qk91/.5BEG3EIeI4Xs0H8RRD4CxI4B4CUQMbTf7LOosg2';

 if(password_verify($senha, $senha_db)):
    echo "logado";
 else:
    echo "senha invalida";
 endif;