<?php

print "Qual o valor da mercadoria? R$";
$merc = (float) fgets(STDIN);

print "Quantos % de desconto? %";
$desc = (float) fgets(STDIN);

$porce_desc = ($desc/100);
$val_desc   = ($merc-($merc*$porce_desc));

print "O produto recebe R\$$desc de desconto;\n";
print "O preço final a pagar é: R\$$val_desc.\n";

?>

