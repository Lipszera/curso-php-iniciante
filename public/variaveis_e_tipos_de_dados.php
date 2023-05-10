<?php

// *DIFERENTES PADRÕES DE TEXTO PARA VARIÁVEIS
$camelCase
$snake_case



//TIPOS DE DADOS

// *STRING - É uma cadeia (sequência) de caracteres alfanuméricos (letras, números e/ou símbolos).

$exemploString = "qualquer123caracter.;/?dentro de 321aspas duplas";
    echo gettype($exemploString);
        RESULTADO: string

// *NUMBERS - integers (inteiros), float(double) (números com pontos flutuantes)

$number1 = 10;
    echo gettype($number);
        RESULTADO: integer

$number2 = 10,2;
    echo gettype($number2);
        RESULTADO: double

/*BOOLEANS - É um tipo de dado lógico que pode ter apenas um de dois valores possíveis: 
TRUE(VERDADEIRO) OU FALSE(FALSO) 0 ou 1.*/

$formValidate = true
    echo gettype($formValidate);
        RESULTADO:  boolean

/* ARRAYS - É uma estrutura de dados que armazena qualquer tipo de dado, uma coleçao de elementos, 
onde cada elemento pode ser identificado por um único índice.*/

$person = ['Gean', 'Felipe', 26, true];

    var_dump($person);
        RESULTADO: array(4) {
                        [0]=>
                        string(4) "Gean"
                        [1]=>
                        string(6) "Felipe"
                        [2]=>
                        int(26)
                        [3]=>
                        bool(true)
                    }

/* OBJETO (object) - Objeto na programação representa coisas do mundo real, tratados em forma de dado. 
Cada objeto possui apenas uma classe, (uma classe pode possuir outras sub classes e varios objetos), 
que por sua vez possui e determina seus atributos e seus métodos (comportamento).*/


class Pessoa {
    public $nome; // Atributos da classe 'Pessoa'
    public $idade;

    public function Falar () { // Método(comportamento) Falar.
        echo "Falou";
    }

}

$gean = new Pessoa (); // Ao instanciar uma classe, teremos um objeto (gean)
$gean->nome = "Gean Felipe Malachovski"; // Atribuindo valor ao atributo '$nome'
$gean->idade = "26";
$gean->Falar();

/*NULL - é a ausência de algum valor
