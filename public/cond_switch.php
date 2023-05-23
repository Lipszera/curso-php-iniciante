<?php

/* Switch/case é uma estrutura condicional que verifica basicamente o valor da variável,
ou seja, ela recebe um valor como parâmetro e verifica se ele atende alguma das condições especificadas. 
Em caso positivo o trecho de código relacionado a essa condição é executado, e o comando break faz com que
a verificação seja encerrada caso a condição do case equivalente seja atendida. Caso não atenda a nenhuma
das condições especificadas, o código irá executar o trecho do codigo presente no comando default (padrão)
*/

$name = 'Aline';

switch ($name) {
    case 'Lipszera':
        echo 'é Lipszera';
        break;
    case 'Aline':
        echo 'é Aline';
        break;
    case 'Felipe':
        echo 'é Felipe';
        break;
    default:
        echo 'Não';
        break;
}
//RESULTADO: é Aline


/*Como em jogo de dados, o comando "rand" ira gerar numeros randomicos aleatorios, onde o primeiro valor 
passado será de valor minimo e o segundo sera de valor maximo
*/
$sorteio = rand(0,6);

switch($sorteio){
   case 0:
         echo "Você perdeu a vez";
         break;
   case 1:
         echo "Avance 1 casa";
         break;
   case 2:
         echo "Avance 2 casas";
         break;
   case 3:
         echo "Você ganhou um bônus! Avance 3 casas";
         break;
   default:
         echo "Jogue novamente";
         break;
}
//RESULTADO: (O RESULTADO SERA ALEATORIO CADA VEZ QUE EXECUTAR O CODIGO)
