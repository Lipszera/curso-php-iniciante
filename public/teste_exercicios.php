<?php



$tornado250 = "HONDA";
$lander250 = "YAMAHA";
$gs1200 = "BMW";

$moto = readline("Qual moto você teria: HONDA, YAMAHA OU BMW?\n");

if ($moto == "HONDA") {
    echo "MOTO DE HOMEM, HONDA É HONDA";
} elseif ($moto == "YAMAHA") {
    echo "YAMAHA É MOTO DE MENININHA";
} elseif ($moto == "BMW") {
    echo "BMW É TOP, AI O PAU PEGA";
} else {
    echo "OPÇÃO INVÁLIDA";
}
