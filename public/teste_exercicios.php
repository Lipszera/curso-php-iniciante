<?php


$name = !!'lipszera';
$age = 26;
$logged = false;

if ($name && $age > 18 && !$logged) {
      echo 'é verdadeiro';
} else {
      echo 'é falso';
}
/*RESULTADO: é verdadeiro

adicionando dois sinais de exclamacao !! no inicio do valor de qualquer var,
temos entao uma var de valor booleano puro verdadeiro (true),
adicionando um sinal de exclamacao ! no inicio do valor de qualquer var, 
invertemos o seu valor booleano, neste exemplo de false para true
*/

