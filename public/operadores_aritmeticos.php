<?php

$number1 = 20;
$number2 = 10;


//soma

echo $number1 + $number2;
//RESULTADO: 15

//subtracao

echo $number1 - $number2;
//RESULTADO: 10

//multiplicacao

echo $number1 * $number2;
//RESULTADO: 200

//divisao

echo $number1 / $number2;
//RESULTADO: 2

//resto

echo $number1 % $number2;
//RESULTADO: 0


//OUTRAS OPERACOES (PRECEDENCIA DOS OPERADORES)

$number3 = 1;
$number4 = 5;

$operacao = $number3 + $number4 * 3;
//RESULTADO: 16


$operacao = ($number3 + $number4) * 3;
//RESULTADO = 18

