<?php
//Criada a referência em $num_1
function referencia(&$num_1){

    $num_1 *= 5;
  
    //retorno o valor de $num_1 * 5
    return $num_1;
  
  }
  
  $num_2 = 3;
  
  //Execução da função
  referencia($num_2);
  echo $num_2;

  echo "</br>";

  /*Declaração da função passagem_padrao
e do parâmetro $num_1 já com seu valor definido*/
function passagem_padrao($num_1 = 15){

    return $num_1;
  
  }
  
  //Será impresso o retorno da função - 15
  echo passagem_padrao();

  
  ?>