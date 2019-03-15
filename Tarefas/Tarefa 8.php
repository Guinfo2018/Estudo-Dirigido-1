<?php
print "Quantos cigarros voce fuma por dia?";
$cig_por_dia = (int) fgets(STDIN);

print "Quantos anos voce fuma?";
$anos = (int) fgets(STDIN);



$cig_f = ($cig_por_dia*365*$anos);
$min   = $cig_f*10;
$hrs   = $min/60;
$dias  = round($hrs/24);
print "\n Fumando 1 cigarro você perde 10min, ou seja, em $anos vc perde:". $dias. "dias";

?>
