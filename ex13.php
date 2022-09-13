<?php

 $codigo_bebida = 2;

 $bebida = "";

 
if
( $codigo_bebida == 1 ){
  $bebida = "Cerveja";
 } 
else if
( $codigo_bebida == 2 ){
  $bebida = "Suco";
 } else if( $codigo_bebida 
==
 3 ) {
  
$bebida =
 "Refrigerante";
 } else if ( $codigo_bebida == 4 ){
  $bebida = "Vinho";
 } 
else
 {
  $bebida = "Bebida desconhecida";
 }

 echo $bebida;

?>