<?php  

print "Digite uma quantidade de dias:";
$dias = (int) fgets(STDIN);

print "Digite uma quantidade de horas:";
$hrs = (int) fgets(STDIN);

print "Digite uma quantidade de minutos:";
$min = (int) fgets(STDIN);

print "Digite uma quantidade de segundos:";
$seg = (int) fgets(STDIN);

$seg_dias   = ($dias*24*60*60);
$seg_hrs    = ($hrs*60*60);
$seg_min    = ($min*60);
$total_segs = ($seg_dias+$seg_hrs+$seg_min);

print "\n$dias dias em segundos é: $seg_dias \n";
print "$hrs hrs em segundos é: $seg_hrs \n";
print "$min min em segundos é: $seg_min \n";
print "$seg seg em segundos é: $seg \n";
print "A soma dos segundos é $total_segs \n";

?>