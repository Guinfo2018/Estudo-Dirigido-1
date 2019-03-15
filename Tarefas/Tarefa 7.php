<?php 
 print "Quantos km você fez?";
 $km = (float) fgets(STDIN);

 print "Quantos dias você usou o carro?";
 $dias = (float) fgets(STDIN);

 $preco_km   = ($km*0.15);
 $preco_dias = ($dias*60);
 $total      = ($preco_dias+$preco_km);

print "Total do aluguel: R\$$total \n";

?>
