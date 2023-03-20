<?php

require("Auteur.php");
require("Livre.php");


$A1= new Auteur("King","Stephen");
$L1= new Livre("Ca",1138,1986,20,$A1);
$L2= new Livre("Simetierre",374,1983,15,$A1);
$L3= new Livre("Le Fléau",823,1978,14,$A1);

echo $A1->afficherBibliographie();

// var_dump($A1);
// var_dump($L3);
// echo $L1->getNbPages();
?>