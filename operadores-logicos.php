<?php
$booleano1 = true;
$booleano2 = false;
$booleano3 = true;

if ($booleano1 and $booleano2) {

  echo "Verdadeiro";

} else {

  //Resultado é falso pois os valores das variáveis são diferentes
  echo "Falso";

}

if ($booleano1 or $booleano2) {

  //Resultado é verdadeiro pois uma das variáveis é verdadeira
  echo "Verdadeiro";

} else {

  echo "Falso";

}

if ($booleano1 xor $booleano3) {

  echo "Verdadeiro";

} else {

  //Resultado é falso pois os valores de ambas as variáveis são verdadeiras
  echo "Falso";

}

if (!$booleano2) {

  //Resultado é verdadeiro pois o valor da variável é falso
  echo "Verdadeiro";

} else {

  echo "Falso";

}

if ($booleano1 && $booleano3) {

  //Resultado é verdadeiro pois ambos os valores das variáveis são verdadeiros
  echo "Verdadeiro";

} else {

  echo "Falso";

}

if (!$booleano1 || !$booleano3) {

  echo "Verdadeiro";

} else {

  //Resultado é falso, pois o valor de ambas as variáveis foram invertidas para falso
  echo "Falso";

}
?>