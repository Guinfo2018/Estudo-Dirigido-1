<?php
print "Quantos metros você quer converter?";
$metros = (float) fgets(STDIN);

$mm = ($metros*1000);

print "\n";
print "$metros em milímetros é: $mm \n";

?>