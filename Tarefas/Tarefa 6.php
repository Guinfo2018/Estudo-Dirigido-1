<?php
print "Quantos graus Celsius você quer converter?";
$gcel = (float) fgets(STDIN);

$faren = (9*$gcel/5 + 32);

print "$gcel °C em Farenheit é: $faren °F\n";

?>