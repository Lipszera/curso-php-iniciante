<?php

/*Os comandos break e continue oferecem maior controle sobre tais estruturas, alterando o fluxo de controle para a próxima iteração ou encerrando todo ciclo de repetições. Os comandos continue e break são usado somente em laços de repetição.

CONTINUE - Quando ele é executado, o laço volta imediatamente para o teste de condição do laço de repetição. Resumindo, o continue, pula a execução atual, passando para próxima. Normalmente, usamos o comando continue em um teste if.

BREAK - Quando ele é executado, o laço é interrompido imediatamente, ignorando demais linhas de codigo abaixo dele.
*/




//Quando a condição do if for igual ao índice "1" do array, o "continue, fará com que o looping for pule (ignore) o elemento "Gean" e passe para o próximo elemento do array, neste caso "Aline"
$names = ['Lipszera', 'Gean', 'Aline'];

for ($i=0; $i < count($names) ; $i++) {
    if ($i === 1) {
        continue;
    }
    echo $names[$i];
}
//RESULTADO: LipszeraAline



//Quando a condição do if for igual ao índice "1" do array, o "break, fará com que o looping for seja interrompido e encerrado neste momento.
$names = ['Lipszera', 'Gean', 'Aline'];

for ($i=0; $i < count($names) ; $i++) {
    if ($i === 1) {
        break;
    }
    echo $names[$i];
}
//RESULTADO: Lipszera



$names = ['Lipszera', 'Gean', 'Aline'];

foreach ($names as $key => $name) {
    echo $name;
    if ($key === 1) {
        break;
    }   
}
//RESULTADO: LipseraGean



$names = ['Lipszera', 'Gean', 'Aline'];

foreach ($names as $key => $name) {
    echo $name;
    if ($key === 1) {
        continue;
    }   
}
//RESULTADO: LipseraAline



$names = ['Lipszera', 'Gean', 'Aline'];
$i = 0;

while ($i < count($names)) {
    echo $names[$i];
    if ($i === 1) {
        break;
    }
    $i++;
}
//RESULTADO: LipszeraGean



$names = ['Lipszera', 'Gean', 'Aline'];
$i = 0;

do {
    if ($i === 2){
        continue;
    }
    echo $names[$i];
    $i++;
} while ($i < count($names));
//RESULTADO: LipszeraGean



$names = ['Lipszera', 'Gean', 'Aline'];
$i = 0;

do {
    if ($i === 1){
        break;
    }
    echo $names[$i];
    $i++;
} while ($i < count($names));
//RESULTADO: Lipszera
