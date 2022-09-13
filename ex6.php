<?php

 $valor_1 = 2;
 $valor_2 = ( $valor_1  - 1) * 3;

 $soma = $valor_1 + $valor_2;
 $mensagem = "mensagem";

 if( $soma > 5 ){
  $mensagem = "O valor da soma é maior que 5";
 } else if ($soma < 5) {
  $mensagem = "O valor da soma é menor que 5";
 } else {
  $mensagem = "O valor da soma é igual a 5";
 }

 echo $mensagem;

?>