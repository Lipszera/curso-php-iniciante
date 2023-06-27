<?php

/*LOOP FOREACH - O loop foreach é usado para percorrer arrays, e usa uma função de modo diferente do "laço for" tradicional. Ele é usado para facilitar a iteração de estruturas como arrays, objetos e outros tipos que são iteráveis. Como resultado ele percorrerá todos os itens da coleção, disponibilizando a chave e o valor de cada elemento. O método foreach passa uma função de callback para cada elemento do array juntamente aos seguintes parâmetros: Valor atual (obrigatório) - O valor do elemento atual do array.

A SINTAXE DO LOOP FOREACH:
    foreach ($variavel as $key => $valor) {
    # instrucao...
}
*/



$names = ['Lipszera', 'Gean', 'Aline'];

//Para cada elemento dentro do array, sera armazenado dentro de uma variavel, (neste caso $name), e para cada indice do array sera armazenado dentro do $key
foreach ($names as $key => $name) {
    echo $key . '=>' . $name;
}
//RESULTADO: 0=>Lipszera1=>Gean2=>Aline



$person = ['name' => 'Gean', 'age' => 26, 'cpf' => 12345678900];

foreach($person as $key => $dataPerson) {
    echo $key . ' => ' .  $dataPerson . PHP_EOL;
}
/*RESULTADO: 
name => Gean
age => 26
cpf => 12345678900
*/