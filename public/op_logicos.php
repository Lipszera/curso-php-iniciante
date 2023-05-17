<?php

// &&(and), ||(or), xor, !

/*
$a and $b	E	Verdadeiro (true) se tanto $a quanto $b são verdadeiros.
$a or $b	OU	Verdadeiro se $a ou $b são verdadeiros.
$a xor $b	XOR	Verdadeiro se $a ou $b são verdadeiros, mas não ambos.
! $a	    NÃO	Verdadeiro se $a não é verdadeiro.
$a && $b	E	Verdadeiro se tanto $a quanto $b são verdadeiros.
$a || $b	OU	Verdadeiro se $a ou $b são verdadeiros.
*/

$canAccess = true;
$isOlder = false;

//resultado sera true (verdadeiro) somente se ambos forem verdadeiros.
$result = $canAccess && $isOlder;

var_dump($result);
//RESULTADO: bool(false)



$canAccess = true;
$isOlder = false;

//resultado sera true (verdadeiro) se um OU outro for verdadeiro.
$result = $canAccess || $isOlder;

var_dump($result);
//RESULTADO: bool(true)



$canAccess = true;

//usando "!" negamos o valor boleano e assim invertemos o resultado final
var_dump(!$canAccess);
//RESULTADO: bool(false)



$canAccess = true;
$isOlder = false;

//resultado sera true (verdadeiro) se um OU outro for verdadeiro.
$result = $canAccess || $isOlder;

//primeiramente a variavel $result é verdadeiro (um deles é true), porém com uso do "!" invertemos o resultado para false
var_dump(!$result);
//RESULTADO: bool(false)