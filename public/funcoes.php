<?php

/*FUNÇÕES - Função em PHP é um trecho de código que pode ser chamado (invocado) de qualquer parte do código para executar uma tarefa qualquer e retornar algum valor. Ou seja, você pode chamar quantas vezes forem necessárias a função. Você pode passar zero ou mais parâmetros para uma função, e poderá retornar apenas um valor. Porém este valor pode ser um array de valores. Mas continua sendo um valor apenas. 
A função quando chamada, ela faz com que o código PHP que a chama, seja parado. Ou seja, o código para, e espera o retorno da função para dar prosseguimento novamente ao seu invocador.
*/


$texto1 = 'tiu dei ai ui iu tél iu, abauti';
$texto2 = 'mi proféxional drim';
$texto3 = 'leti mi star bai... bai tânlei';

function texto($texto1, $texto2, $texto3) {
    echo "o texto passado para funcao foi:" . "\n" . $texto1 . "\n" . $texto2 . "\n" . $texto3;
}



texto($texto1, $texto2, $texto3);