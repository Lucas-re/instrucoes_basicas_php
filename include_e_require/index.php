

<?php 
/**
 * as funções include e require servem para incluir o conteudo 
 * de um arquivo php em outro arquivo php  
 * 
 * elas produzem o mesmo resultado. mas a diferença entre elas é: 
 * - o require se não conseguir incluir o arquivo, ele gera um erro fatal
 * e para o script
 * - o include gera um aviso e não interrompe o script, se colocado no mesmo caso
 * 
 * as inclusoes com os metodos require_once e include_once servem para o php verificar
 * se esse arquivo já foi incluido; se ele já foi incluido ele não inclui novamente 
 */
 
 include_once 'header.php';
//  include 'header.php';

 echo "Conteúdo"; 

 include_once 'footer.php';
 //  include 'footer.php';
?>
