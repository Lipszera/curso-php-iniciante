<?php


/*O For php é um laço de repetição no PHP que é utilizado quando o dev sabe quantas repetições 
deverão ser executadas. No caso, esse laço de repetição faz o PÓS DECREMENTO
realizando as operações necessárias até que a contagem de repetições seja finalizada ou que sua condição declarada seja falsa. 

PASSO A PASSO DO FUNCIONAMENTO DO LOOP FOR:
1 - Testa a condição;
2 - Se a  condição for falsa então ignora todos os comandos do bloco dentro do FOR e passa a executar os comandos após o bloco do FOR.
3 - Se  condição for verdadeira então executa cada um dos comandos do bloco subordinado ao FOR.
4 - Após executar o último comando do bloco do FOR volta ao passo 1.

A SINTAXE DO LOOP FOR:
    for (valor_inicial; valor_limite, incremento_ou_decremento);
*/


//Loop for com incremento
for ($i = 0; $i <= 10; $i++){
    echo $i;
}
/*RESULTADO: 012345678910
OBS: o laço de repetição esta ocorrendo desta maneira:
Exibe o número 0;
Incrementa +1;
Exibe o número 1;
Incrementa +1;
Exibe o número 2.
Incrementa +1;
Exibe o número 3.
Assim, por diante, ate que o numero 10 for exibido (enquanto a condicao <= 10 seja verdadeira).
*/



//Loop for com decremento
for ($i = 5; $i >= 0; $i--) {
    echo $i."\n";
}
/*RESULTADO:
5
4
3
2
1
0
*/



//Loop for mostrando numeros pares até 20
for ($numeroPar = 0; $numeroPar <= 20; $numeroPar ++) {
    if ($numeroPar % 2 == 0) {
        echo $numeroPar."\n";
    }
}
/*RESULTADO:
0
2
4
6
8
10
12
14
16
18
20
*/



//Loop for fazendo a contagem e mostrando indices de um array
$names = ['Lipszera', 'Gean', 'Aline'];
/* funcao 'count' faz a contagem de elementos dentro de um array, neste caso, existem 3 elementos no array,
iniciando em 0.
*/
for ($i = 0; $i < count($names); $i++) {
    echo $i;
}
//RESULTADO: 012



$names = ['Lipszera', 'Gean', 'Aline'];

for ($i = 0; $i < count($names); $i++) {
    echo ($names [$i]);
}
/*RESULTADO: LipszeraGeanAline
OBS: note que a cada pós incremento,(3 neste caso) o '$i' é substituido pelo o indice 0, 1 e 2 do array 
*/