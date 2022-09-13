<?php

 $a = 6;
 $b = 5;
 $c = 7;

 $resultado_final = "a";

 if( $a > $c || $a > $b ){
  $resultado_final = "b";
 } else if( $b > $c || $b > $a ){
  $resultado_final = "c";
 } else {
  $resultado_final = "d";
 }

 echo $resultado_final;

?>