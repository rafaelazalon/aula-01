<?php
$num_1 = 15;

function exemplo($num_2){

  global $num_1;

  $operacao = $num_1 + $num_2;

  return $operacao;

}

echo "</br>";

function exemplo2($num_1, $num_2){

    $operacao = $num_1 + $num_2;
  
    return $operacao;
  
  }
  
  exemplo2(4,6);
  $num_3 = 10;
  
  $operacao_2 = $num_1 + $num_3;
  
  echo $operacao_2;
?>