<?php

/*LOOP WHILE -  O loop while é usado quando você não sabe quantas vezes a instrução deve ser repetida. Ele testa a condição no início de cada iteração. Se a condição for verdadeira, o loop continuará sendo executado. Se a condição for falsa, o loop será interrompido.

PASSO A PASSO DO FUNCIONAMENTO DO LOOP WHILE:
1 - Testa a condição;
2 - Se a  condição for falsa então pula todos os comandos do bloco subordinado ao while e passa a executar os comandos após o bloco do while.
3 - Se  condição for verdadeira então executa cada um dos comandos do bloco subordinado ao while.
4 - Após executar o último comando do bloco do while volta ao passo 1.

SINTAXE DO LOOP WHILE:
$varivel = algum valor inicial
    while ($variavel; valor_limite) {
        #bloco de comandos
    }
*/



//Loop while com incremento
$i = 0;
while ($i <= 10) {
    echo $i;
    $i++;
   
}
//RESULTADO: 012345678910



//Loop while com decremento
$i = 5;
while ($i >= 0) {
    echo $i;
    $i--;
}
//RESULTADO: 543210



//Loop while mostrando numeros pares ate 20
$i = 0;
while ($i <= 20) {
    if($i % 2 == 0) {
        echo $i;
    }
    $i++;
}
//RESULTADO: 02468101214161820



$names = ['Lipszera', 'Aline', 'Gean'];

$i = 0;
while ($i < count($names)) {
    echo $i;
    $i++;
}
//RESULTADO: 012



//Loop while fazendo a contagem e mostrando indices de um array
$names = ['Lipszera', 'Aline', 'Gean'];

$i = 0;
while ($i < count($names)) {
    echo ($names [$i]);
    $i++;
}
//RESULTADO: LipszeraAlineGean