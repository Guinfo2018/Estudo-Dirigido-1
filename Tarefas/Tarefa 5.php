<?php 

print "Qual a distância da viagem (Km)? ";
$dist = (float) fgets(STDIN);

print "Qual velocidade você pretende fazer (Km/h)?";
$velo = (float) fgets(STDIN);

$temp = ($dist/$velo);

print "O tempo médio dessa viagem será: $temp Hrs \n";

?>