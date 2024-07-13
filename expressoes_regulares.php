<?php
ini_set('display_errors', 1);
/**
 *  Expressões regulares define um padrão a ser usado para procurar ou 
 *  substituir palavras ou grupos de palavras.
 * 
 *  ^ inicio da uma expressão regular, $ final da expressao  - /i - 
 *  case sensitive
 *  
 *  [] conjunto de caracteres. Nele passamos o intervalo de caracteres que 
 *  serão aceitos
 * 
 *  {} ocorrencias. Nele passamos o intervalo de ocorrencias que serão aceitos
 *  ou um numero fixo de ocorrencias que serão aceitos. exemplo {0,1} ou {1}
 * 
 *  podemos passar também uma interrogação "?" que indica que pode ser aceito 
 *  uma ocorrencia ou nenhuma ocorrencia. exemplo ? 
 * 
 *  ou podemos passar um asterisco "*" que indica que pode ter nenhuma ocorrencia 
 *  ou varias ocorrencias. exemplo *
 *  
 *  ou podemos passar o sinal de mais "+" que indica que pode ter uma ocorrencia 
 *  ou varias ocorrencias. exemplo +
 * 
 *  *{0,} +{1,}
 *  /^[a-z0-9. \-\_]+@[a-z0-9-\_]+\.(com|br|com.br|net)$/
 *  /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/
 */

 $email = "contato@gmail.com";
 $padraoEmail = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|net|com.br)$/i"; // expressão para validar email

 $data = "26/08/2023"; 
 $padraoData = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/"; // expressão para validar data

 $cpf = "863.386.735-05";
 $padraoCpf = "/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/"; // expressão para validar cpf

 $cnpj = "24.356.568/0001-21";
 $padraoCnpj = "/^[0-9]{2}\.[0-9]{3}\.[0-9]{3}\/[0-9]{4}\-[0-9]{2}$/"; // expressão para validar cpf
 


 if(preg_match($padraoEmail, $email)):
    echo "email valido";
    echo "<hr>";
    echo $email;
 else:
    echo "invalido"; 
    echo "<hr>";
 endif;

 echo "<hr>";

 if(preg_match($padraoData, $data)):
    echo "data valida";
    echo "<hr>";
    echo $data;
 else:
    echo "invalido"; 
    echo "<hr>";
 endif;

 echo "<hr>";

 if(preg_match($padraoCpf, $cpf)):
    echo "cpf valido";
    echo "<hr>";
    echo $cpf;
 else:
    echo "cpf invalido"; 
    echo "<hr>";
 endif;

 echo "<hr>";

 if(preg_match($padraoCnpj, $cnpj)):
    echo "cnpj valido";
    echo "<hr>";
    echo $cnpj;
 else:
    echo "cnpj invalido"; 
    echo "<hr>";
 endif;

