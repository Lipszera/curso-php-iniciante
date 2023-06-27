<?php

$person = ['name' => 'Gean', 'age' => 26, 'cpf' => 12345678900];

foreach($person as $key => $dataPerson) {
    echo $key . ' => ' .  $dataPerson . PHP_EOL;
}