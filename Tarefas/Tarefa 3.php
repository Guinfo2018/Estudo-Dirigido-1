<?php

print "Qual o seu salário?";
$sal = (float) fgets(STDIN);

print "Qual a porcentagem de aumento?";
$porce = (float) fgets(STDIN);

$porcent = ($porce/100);
$new_sal = $sal+($sal*$porcent);
$aumento = ($new_sal-$sal);
print "\nSeu salário com aumento é: R\$$new_sal \n";
print "Aumento de: R\$$aumento\n";

?>