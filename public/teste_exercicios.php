<?php



$sorteio = rand(0,5);

switch($sorteio){
   case 0:
         echo "Você perdeu a vez";
         break;
   case 1:
         echo "Avance 1 casa";
         break;
   case 2:
         echo "Você ganhou um bônus! Avance 3 casas";
         break;
   default:
         echo "Jogue novamente";
         break;
}