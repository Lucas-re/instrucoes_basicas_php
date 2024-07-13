<?php
ini_set('display_errors', 1);
/**
 * manipulação de arquivos
 * 
 * fopen() - usado para abriar o arquivo para escrita
 * fclose() - usado para fechar o arquivo após a escrita 
 * fwrite() - usado para escrever conteudo no arquivo aberto
 * !feof() - usado para indicar o fim do arquivo
 * fgets() - usado para pegar as linhas do arquivo escrito
 * filesize - usado para pegar o tamanho do conteudo do arquivo
 */

/**
 * Criando e escrevendo dentro de um arquivo
 * 
 */

 $arquivo = 'arquivo.txt';              // pega o arquivo para ser aberto
 $conteudo = "Conteudo de teste\r\n";   // conteudo que será escrito dentro do arquivo
 $tamanhoArquivo = filesize($arquivo);  // pega o tamanho do conteduo do arquivo


 $arquivoAberto = fopen($arquivo, 'r'); // abre o arquivo para leitura

//  fwrite($arquivoAberto,$conteudo);      // abre o arquivo para escrita 
//  fclose($arquivoAberto);                // fecha o arquivo após a escrita

/**
 * Exibindo o conteudo desse arquivo
 * 
 * Criamos um looping com a condição: enquanto não for o 
 * final do arquivoAberto, o fgets irá pegar o conteudo de cada linha 
 * do arquivo, e armazenar na variavel linha e depois iremos exibir esse conteudo
 */
 
 while(!feof($arquivoAberto)):
    $linha = fgets($arquivoAberto, $tamanhoArquivo);
    echo $linha."<br>";
 endwhile;

?>

 <html>
    <a href="arquivo.txt" download="arquivo.txt">download</a>
 </html> 

