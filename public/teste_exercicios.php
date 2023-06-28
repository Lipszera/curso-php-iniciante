<?php

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