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

$ageLipszera = 26;

if($ageLipszera >= 18) {
    echo "Lipszera é maior de idade";
} else {
    echo "Lipszera não é maior de idade";
}
//RESULTADO: Lipszera é maior de idade


$a = 4;
$b = 2;

if($a/$b == 2) {
    echo "O resultado da divisão de ".$a.  " por ".$b. " é igual a 2";
} else {
    echo "O resultado da divisão de ".$a.  " por ".$b. "NÃO é igual a 2";
}
// RESULTADO: O resultado da divisão de 4 por 2 é igual a 2


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
