<?php

//NUMBERS - integers (inteiros), float(double) (números com pontos flutuantes)

$number1 = 10;
    echo gettype($number);
        //RESULTADO: integer

$number2 = 10.2;
    echo gettype($number2);
        //RESULTADO: double


/*FUNCOES PARA ARREDONDAR VALORES COM PONTO FLUTUANTES (FLOAT, DOUBLE)
PARA UM NUMERO INTEIRO EM CASAS DECIMAIS (INT). (round, ceil e floor)
*/

//FUNCAO 'round' - Retorna um valor inteiro mais PROXIMO do valor passado como parâmetro.

$number1 = 10.7890;
    echo $result = round($number1);
//RESULTADO: 11

$number2 = 10.3890;
    echo $result = round($number2);
//RESULTADO: 10



/*FUNCAO 'ceil' - Retorna o proximo MAIOR valor inteiro arrendondado pra CIMA
do valor passado como parametro
*/
$number1 = 5.8591;
    echo $result = ceil($number1);
//RESULTADO: 6

$number2 = 5.1520;
    echo $result = ceil($number2);
//RESULTADO: 6



/*FUNCAO 'floor' - Retorna o proximo MENOR valor inteiro arredondando pra BAIXO
do valor passado como parametro
*/
$number1 = 2.8931;
    echo $result = floor($number1);
//RESULTADO: 2

$number2 = 2.2149;
    echo $result = floor($number2);
//RESULTADO: 2



//FUNCAO 'min' - Busca o valor MINIMO (MENOR) existente dentro de um array

$numbers = [10,30,55,5,27,38,2];
echo $result = min($numbers);
//RESULTADO: 2



//FUNCAO 'max' - Busca o valor MAXIMO (MAIOR) existente dentro de um array

$numbers = [10,30,55,5,27,38,2];
echo $result = max($numbers);
//RESULTADO: 55



//FUNCAO 'rand' - Retorna numeros RANDOMICOS (aleatorios) dentro de um limite especificado como parametro

$min = 1;
$max = 99;

$result = rand($min, $max);
    echo $result;
/*RESULTADO GERADO VARIAS VEZES: 44
                                 21
                                 76
                                 98
                                 32
                                 12
*/



//FUNCAO 'pow' - Retorna o valor da base elevado a um determinado expoente (POTENCIA)

$number1 = 2;
$potencia = 4;

    echo $result = pow($number1, $potencia);
/*RESULTADO: 16
2*2*2*2
*/



//FUNCAO 'sqrt' - Retorna o valor da RAIZ QUADRADA de um determinado valor passado como parametro

$valor = 9;
    echo $result = sqrt($valor);
//RESULTADO: 9



//FUNCAO 'pi' - Retorna o valor de 'pi' que é o resultado da divisão do perímetro pelo diâmetro de um círculo.

echo $result = pi();
//RESULTADO: 3.1415926535898



//FUNCAO 'decbin' - Transforma um numero de valor DECIMAL para BINARIO
//FUNCAO 'bindec - Transforma um numero de valor BINARIO para DECIMAL

$decbin = 26;
    echo $result = decbin($decbin); 
//RESULTADO: 11010

$bindec = 1011001;
    echo $result = bindec($bindec); 
//RESULTADO: 89




/*FUNCAO 'decoct' - Transforma um numero de valor DECIMAL para o valor de base OCTAL
(base octal se inicial no numero 8)
*/

$decoct = 8;
    echo $result = decoct($decoct); 
//RESULTADO: 10



/*FUNCAO 'dechex' - Transforma um numero de valor DECIMAL para o valor de base HEXADECIMAL
muito util para utilizacao de cores no css (#ffffff é o codigo da cor branca em hexadecimal no css)
*/



$dechex = 255;
    echo $result = dechex($dechex);
//RESULTADO: ff



$dechex = 255;
    echo $result = dechex(255).dechex(255).dechex(255);
//RESULTADO: ffffff