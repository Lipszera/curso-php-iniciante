<?php

/* 
(string)
(boolean)
(float)
(integer)
(double)
(object)
(array)
intVal
floatVal
doubleVal
strVal
boolVal
*/

//ALTERANDO O TIPO DE DADOS

//string -> boolean
$name = 'Lipszera';

$change = (boolean) $name;

var_dump($change);
//RESULTADO: bool(true)



//integer -> string
$number = 26;

$change = (string) $number;

var_dump($change);
//RESULTADO: string(2) "26"



//array -> object
$person = ['Lipszera', 26];

$change = (object) $person;                

var_dump($change);
/*RESULTADO: 
object(stdClass)#1 (2) {
  ["0"]=>
  string(8) "Lipszera"
  ["1"]=>
  int(26)
}
*/
/*OBS: para resgatar (acessar) valores de um array transformado em objeto, 
é necessario criar indices manuais para cada elemento
*/

$person = ['name' => 'Lipszera', 'age' => 26];

$change = (object) $person;                

var_dump($change->name);
//RESULTADO: string(8) "Lipszera"




//string -> boolVal
$name = 'Lipszera';

$change = boolVal ($name);

var_dump($change);
//RESULTADO: bool(true)



//double -> intVal
$number = 26.54;

$change = intVal ($number);

var_dump($change);
//RESULTADO: int (26)



//double -> strVal
$number = 26.54;

$change = strVal ($number);

var_dump($change);
//RESULTADO: string(5) "26.54"