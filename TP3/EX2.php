<?php

do{

$nb1 = mt_rand(1,200); 
$nb2 = mt_rand(1,200);
$nb3 = mt_rand(1,200);
}while(($nb1 % 2 == 1 || $nb2 % 2 == 1 || $nb3 %2 == 0));
echo "la suite est $nb1 et $nb2 et $nb3";
?>
