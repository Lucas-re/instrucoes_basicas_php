<?php
/**
 * a função date recebe parametros para formartar a data 
 * e o horario do servidor
 * 
 * parametros datas:
 * 'd' - retorna o dia atual com dois digitos
 * 'D' - retorna o dia atual abreviado no formato textual
 * 'm' - retorna o mês atual com dois digitos
 * 'M' - retorna o mês atual em formato textual 
 * 'y' - retorna o ano atual com dois digitos 
 * 'Y' - retorna o ano atual com quatro digitos 
 * 'l' - retorna o dia da semana em formato textual por extenso
 * 
 * parametros horas e minutos:
 * 'h' - retorna o horario atual no formato de 12 horas
 * 'H' - retorna o horario atual no formato de 24 horas 
 * 'i' - retorna os nimutos
 * 's' - retorna os segundos
 * 'A' - retorna o periodo do horario: PM ou AM
 * 
 * metodo para definir o time_zone 
 * date_default_timezone_set()
 * 'America/Sao_paulo' - utilizado para definir o time zone
 */
 
 // exemplo 1 data
 echo " exemplo 1 data: ".date('d/m/Y');

 // exemplo 2 horas e minutos
 echo " exemplo 2 horas, minutos e segundos: ".date('H:i:s');

 // exemplo 3 data, horas e minutos
 echo ' exemplo 3 data, horas, minutos e segundos: '. date('d/m/Y H:i:s');

 // definir o time_zone do horario
 date_default_timezone_set('America/Sao_paulo');


/**
 * o banco de dados trabalha com duas colunas para armazenar datas: date e o datetime
 * que armazenam data e o horario
 * 
 * para armazenar os dados de data no banco de dados o formato deve ser 
 * date('Y-m-d')
 * 
 * para armazenar os dados de datetime no banco de dados o formato deve ser 
 * date('Y-m-d H:i:s')
 */

 // armazenar dados date no banco de dados
 $date = date('Y-m-d');

 // armazenar dados datetime no banco de dados
 $datetime = date('Y-m-d H:i:s');


 echo "<hr>";
 
/**
 * a função time nos retorna a quantidade de segundos que se passarão 
 * desde 1970 até a data atual  
 * 
 * 
 */

 echo "Metodo time: ".time();

 // formatando time
 $time = time();
 echo date('d/m/Y', $time);

 echo "<hr>";

/**
 * a função mktime() é utilizada para trabalharmos com datas passadas ou futuras  
 * 
 * passamos para ela como parametro o horario, os minutos, os segundos, o mês, o dia, 
 * com dois digitos e o ano com quatro digitos 
 */

//  $data_pagamento = mktime(20, 12, 00, 08, 21, 2023);
//  echo date('d/m - h:i', $data_pagamento);

 echo "<hr>";

/**
 * a função strtotime() é utilizada para formatar datas vindo do banco de dados 
 */

 $date2 = '2023-08-20';
 $datetime2 = '2023-08-20 20:30:00';

 $data = strtotime($date2);
 echo date("d/m/Y", $data);

 $data_hora = strtotime($datetime2);
 echo date('d/m/Y', $data_hora);


