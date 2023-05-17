<?php

$canAcess = true;
$isOlder = false;

//resultado sera true (verdadeiro) se um OU outro for verdadeiro.
$result = $canAcess || $isOlder;

//primeiramente a variavel $result é verdadeiro (um deles é true), porém com uso do "!" invertemos o resultado para false
var_dump(!$result);
//RESULTADO: bool(false)