<?php

 $booleano_1 = true;
 $booleano_2 = false;
 $booleano_3 = false;

 $total = 0;

 if( $booleano_1 ){
  $total += 1;
 }
 if( $booleano_1 && !$booleano_2 ){
  $total +=1;
 }
 if( $booleano_1 && $booleano_3 ){
  $total +=1;
 }
 echo $total;

?>