<?php


/*Booleans (true / false) - é um tipo de dado que tem valor booleano puro,
que representa apenas dois estados lógicos, verdadeiro ou falso. 
Isso tem uma relação direta com os bits do computador que só possuem dois estados 0 ou 1.
*/

$_SESSION['logged'] = false;

$_SESSION['logged'] = true;

if ($_SESSION['logged']) {
    echo 'é verdadeiro';
}
//RESULTADO: é verdadeiro

//exemplo de valor booleando utiizando uma condicional de looping 'for'

for ($i = 0; $i <= 10; $i++) {
    echo $i;
}
/*RESULTADO: 012345678910
enquanto a condição for verdadeira ($i for menor ou igual que 10),
o looping vai continuar sendo executado, se a condição for falsa (no caso de $i tiver valor 11), 
o looping sera encerrado.
*/

//Neste caso, as var nao possuem valores booleanos puros, porem se comportam como valores booleanos
$name = 'lipszera';
$age = 26;
$logged = false;

if ($name === 'lipsera' && $age > 18 && $logged === true) {
      echo 'é verdadeiro';
} else {
      echo 'é falso';
}
/*RESULTADO: é falso
somente duas das tres variaveis da condicional retornaram valor booleano verdadeiro,
 por este motivo o resultado exigido pela condição é falso
*/

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