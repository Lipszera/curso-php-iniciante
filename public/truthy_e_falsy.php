<?php
/* 
Truthy e Falsy (sao valores que se comportam como valores booleanos, 
mas que não são de fato valores booleanos)


Falsy
null        null
0           integer
0.0         float
"0"         string
" "         empty string (string vazia)
array()     empty array

Truthy - O resto
*/
var_dump(!!null); //RESULTADO: bool(false)
var_dump(!!0); //RESULTADO: bool(false)
var_dump(!!0.0); //RESULTADO: bool(false)
var_dump(!!"0"); //RESULTADO: bool(false)
var_dump(!!" "); //RESULTADO: bool(false)
var_dump(!! [ ]); //RESULTADO: bool(false)


if(0) {
    echo 'VERDADEIRO';
} else {
    echo 'FALSO';
}
//RESULTADO: FALSO

//usando "!" transformamos o valor "Falsy" em um booleano verdadeiro
if(!0) {
    echo 'VERDADEIRO';
} else {
    echo 'FALSO';
}
//RESULTADO: VERDADEIRO


/*string tem o valor considerado "Truthy", porém ao negarmos usando "!"
o valor se torna um booleano false.*/
if(!'Lipszera') {
    echo 'VERDADEIRO';
} else {
    echo 'FALSO';
}
//RESULTADO: FALSO



/*string tem o valor considerado "Truthy", porém ao negarmos duas vezes usando "!!"
o valor se torna um booleano true.*/
if(!!'Lipszera') {
    echo 'VERDADEIRO';
} else {
    echo 'FALSO';
}
//RESULTADO: VERDADEIRO