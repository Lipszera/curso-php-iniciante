<?php

//OPERADORES DE COMPARACAO : <,> <=,>= != OU !==,== OU ===

/*
< (menor)
> (maior)
<= (menor ou igual)
>= (maior ou igual)
!= (diferente) - valor
!== (diferente) - valor e tipo
== (igual) - valor
=== (idêntico) - valor e tipo
*/

$result = 30 < 50;
var_dump($result);
//RESULTADO: true (verdadeiro)



$result = 30 > 50;
var_dump($result);
//RESULTADO: false (falso)



$result = 50 <= 50;
var_dump($result);
//RESULTADO: true (verdadeiro)



$result = 50 >= 50;
var_dump($result);
//RESULTADO: true (verdadeiro)



$result = 50 != 50;
var_dump($result);
//RESULTADO: false (falso)



$result = 40 != 50;
var_dump($result);
//RESULTADO: true (verdadeiro)



$result = '50' != 50;
var_dump($result);
//RESULTADO: false (falso)



$result = 20 !== '20';
var_dump($result);
//RESULTADO: true (verdadeiro)



$result = 50 == 50;
var_dump($result);
//RESULTADO: true (verdadeiro)



$result = '50' == 50;
var_dump($result);
//RESULTADO: true (verdadeiro)



$result = 50 === 50;
var_dump($result);
//RESULTADO: true (verdadeiro)



$result = '50' === 50;
var_dump($result);
//RESULTADO: false (falso)





