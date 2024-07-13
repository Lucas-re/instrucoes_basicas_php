<?php
/**
 *  Criptografia é um conjunto de regras que visa codificar uma informação
 *  para que apenas o emissor e o receptor consiga decifrar.
 */


/**
 *  base64 - É uma criptografia de mão dupla, ou seja conseguimos codificar e decodificar.
 *  md5 - É uma criptografia de mão unica, ou seja só conseguimos criptografar
 *  sha-1 - É uma criptografia de mão unica, ou seja, só conseguimos criptografar
 */

 $senha = "123456";
 $novaSenha = base64_encode($senha);

 echo "<b> Sua senha é </b>: ".base64_decode($novaSenha)."<br>";

 echo "<b> base64 </b>: ".$novaSenha."<br>";

 echo "<hr>";

 echo "<b> md5 </b>: ".md5($senha)."<br>";

 echo "<hr>";

 echo "<b> sha-1 </b>: ".sha1($senha)."<br>";
