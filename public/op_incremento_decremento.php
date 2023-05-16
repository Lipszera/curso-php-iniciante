<?php

//INCREMENTO/DECREMENTO

//PRE INCREMENTO/PRE DECREMENTO (valor é somado ou subtraído na hora que chamar a variável)
$number = 10;

echo ++$number;
// RESULTADO: 11

$number = 10;

echo --$number;
//RESULTADO: 9

/*POS INCREMENTO/POS DECREMENTO (valor é somado ou subtraído posteriormente, 
na proxima vez que chamar a variavel*/

$number = 10;
    echo $number; // RESULTADO: 10    
        $number++;
            echo $number; // RESULTADO: 11

            $number = 10;
            echo $number; // RESULTADO: 10    
                $number--;
                    echo $number; // RESULTADO: 9




