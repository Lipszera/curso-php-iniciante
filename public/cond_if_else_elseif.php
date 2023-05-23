<?php

/*O if/else é um operador condicional utilizado quando desejamos executar um bloco de código
apenas se determinada condição for atendida, por exemplo, 
exibir um conteúdo (if) apenas se o usuário for maior de idade, se não, será executado outro bloco de código (else)*/

$isAdmin = false;

if($isAdmin) {
    echo "É ADMIN";
} else {
    echo "NÃO É ADMIN";
}
//RESULTADO: NÃO É ADMIN



//Podemos trabalhar com if/else de outra forma também:

$isAdmin = true;

echo ($isAdmin) ? 'É ADMIN' : 'NÃO É ADMIN';
//RESULTADO: É ADMIN



$ageLipszera = 26;

if($ageLipszera >= 18) {
    echo "Lipszera é maior de idade";
} else {
    echo "Lipszera não é maior de idade";
}
//RESULTADO: Lipszera é maior de idade



$ageLipszera = 17;

echo ($ageLipszera >= 18) ? 'Lipszera é maior de idade' : 'Lipszera não é maior de idade';
//RESULTADO: Lipszera não é maior de idade



$a = 4;
$b = 2;

if($a/$b == 2) {
    echo "O resultado da divisão de ".$a.  " por ".$b. " é igual a 2";
} else {
    echo "O resultado da divisão de ".$a.  " por ".$b. "NÃO é igual a 2";
}
//RESULTADO: O resultado da divisão de 4 por 2 é igual a 2



$number1 = 100;
$number2 = 50;
$coffeisBlack = true;

$result = $number1 > $number2 && $coffeisBlack;

echo ($result) ? 'é verdadeiro' : 'não é verdadeiro';
//RESULTADO: é verdadeiro



/*Além do if/else, existe também a condicional elseif ou else if. 
Essa opção é utilizada caso seja necessário verificar duas ou mais condições.*/

$a = 8;
$b = 2;

if ($a/$b==2) {
    echo "O resultado da divisão é 2";
} elseif ($a/$b==4) {
    echo "O resultado da divisão é 4";
} else {
    echo "O resultado da divisão não é 2 nem 4";
}
//RESULTADO: O resultado da divisão é 4


$tornado250 = "HONDA";
$lander250 = "YAMAHA";
$gs1200 = "BMW";

$moto = readline("Qual moto você teria: HONDA, YAMAHA OU BMW?\n");

if ($moto == "HONDA") {
    echo "MOTO DE HOMEM, HONDA É HONDA";
} elseif ($moto == "YAMAHA") {
    echo "YAMAHA É MOTO DE MENININHA";
} elseif ($moto == "BMW") {
    echo "BMW É TOP, AI O PAU PEGA";
} else {
    echo "OPÇÃO INVÁLIDA";
}

