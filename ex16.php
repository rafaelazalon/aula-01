<?php

 $aluguel = 900.00;
 $luz = 100.00;
 $telefone = 75.00;

 if( $aluguel 
<=
 900.00 && (
$luz + $telefone
) 
<
 200.00 ){
  echo "Emerson vai alugar esse imóvel";
 } else {
  echo "Emerson não vai alugar esse imóvel";
 }
?>