<?php

 define('MENSAGEM', 'minha mensagem');

 $numero_1 = 1;
 $numero_2 = 2;

 if( $numero_1 > $numero_2 ){
  $MENSAGEM = "numero_1 maior que numero_2";
 } else if( $numero_1 < $numero_2 ) {
  $MENSAGEM = "numero_2 maior que numero_1";
 }

 echo $MENSAGEM;

?>