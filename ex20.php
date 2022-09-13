<?php

 $a = 8;
 $b = 2;
 $c = 4;

 $numero_ator = ($a - $c) / $b;

 switch ($numero_ator) {
  case 1:
   echo "Denzel Washington";
  break;
  case 2:
   echo "David Wenham";
  break;
  case 3:
   echo "Orlando Bloom";
  break;
  case 4:
   echo "Rodrigo Santoro";
  break;
  default:
   echo "Nenhum ator";
  break;
 }
?>