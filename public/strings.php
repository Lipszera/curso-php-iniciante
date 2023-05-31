<?php
/*STRING (CADEIRA) - String é uma cadeia ou uma sequência de caracteres,
geralmente utilizada para representar palavras, frases ou textos de um programa.
Tudo que estiver dentro de aspas simples ou duplas  (' ' OU " ") será considerado uma string.
*/

$name = "geanLIPSZERA123?;.[{*%^~! != >=";
    echo gettype($name);
//RESULTADO: string


//Diferencas do uso de aspas duplas ou simples

$age = 26;
$name = 'Lipszera $age';

echo $name;
/*RESULTADO: Lipszera $age
com o uso de aspas simples, não podemos concatenar a string com nenhuma outra variavel,
e mesmo que tenha uma var dentro da string, ela tambem sera considerada string.
*/


$age = 26;
$name = "Lipszera $age";

echo $name;
/*RESULTADO: Lipszera 26
com o uso das aspas duplas, podemos concatenar a string com quaisquer outos valores
obs: valido o uso de chaves para destacar a var dentro da string para facil identificacao visual. 
"Lipszera {$age}"
*/


$string = "GEANfelipeMaLaChOvSkI1234Ç][/;.123-()*&¨86^}CF~ASDASDasdasdh";
    echo strlen($string);
/*RESULTADO: 62
funcao strlen faz a contagem de quantos caracteres existem dentro da variavel
*/



$string = "GEANfelipeMaLaChOvSkI1234Ç][/;.123-()*&¨86^}CF~ASDASDasdasdh";
    echo substr($string, 0, 10);
/*RESULTADO: GEANfelipe
funcao substr extrai a quantidade designada de caracteres dentro da var,
neste caso 10 caracteres
*/


$name = 'GEANFELIPEMALACHOVSKI';

    echo str_contains($name, 'MALA');
/*RESULTADO: 1
funcao str_contains permite realizar uma busca dentro de uma string,
neste caso, se 'MALA' estiver presente dentro da string, entao a funcao retornara um valor booleano verdadeiro
*/
