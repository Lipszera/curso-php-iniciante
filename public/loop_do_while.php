<?php

/*LOOP DO-WHILE - O loop DO-WHILE é usado quando você não sabe quantas vezes a instrução deve ser repetida. Muito parecido com o WHILE, (1º verifica condiçao, se for true executa o loop) porem no DO-WHILE primeiro é executado toda a instrução e após executado a instrução presente dentro das chaves é verificado a condição se é verdadeira ou falsa, se a condição for verdadeira, o loop continuará sendo executado. Se a condição for falsa, o loop será interrompido.


PASSO A PASSO DO FUNCIONAMENTO DO LOOP DO-WHILE:
1 - Executa toda a instrução de comandos;
2 - Testa a condição
3 - Se  condição for verdadeira então volta ao passo 1 e executa toda a instrução novamente
4 - Se a  condição for falsa então o loop é encerrado.

SINTAXE DO LOOP DO-WHILE
$varivel = algum valor inicial;
do {
    #bloco de comandos(instruções)
} while ($variavel; valor_limite);
*/




//Loop do-while com incremento
$i = 0;
do {
    echo $i;
    $i++;
} while($i <= 10);
//RESULTADO: 012345678910



//Loop do-while com decremento
$i = 10;
do {
    echo $i;
    $i--;
} while($i >= 0);
//RESULTADO: 109876543210



//Loop do-while mostrando numeros pares ate 20
$i = 0;
do {
    if($i % 2 == 0){
        echo $i;
    }
    $i++;
} while($i <= 20);
//RESULTADO: 02468101214161820




//Loop do-while fazendo a contagem e mostrando indices de um array
$names = ['Lipszera', 'Aline', 'Gean'];

$i = 0;
do {
    echo $names[$i];
    $i++;
} while ($i < count($names));
//RESULTADO: LipszeraAlineGean