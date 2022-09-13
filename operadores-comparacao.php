<?php
$numero1 = 15;
$numero2 = 5;
$numero3 = 5;

//Verifica se $numero1 é igual a $numero2
if ($numero1 == $numero2) {
  echo "Sim";
} else {
  echo "Não";
}

//Verifica se $numero1 é diferente de $numero2
if ($numero1 != $numero2) {
  echo "Sim";
} else {
  echo "Não";
}

//Verifica se $numero1 é menor que $numero2
if ($numero1 < $numero2) {
  echo "Sim";
} else {
  echo "Não";
}

//Verifica se $numero3 é maior que $numero1
if ($numero3 > $numero1) {
  echo "Sim";
} else {
  echo "Não";
}

//Verifica se $numero1 é menor ou igual a $numero2
if ($numero1 <= $numero2) {
  echo "Sim";
} else {
  echo "Não";
}

//Verifica se $numero1 é maior ou igual a $numero2
if ($numero1 >= $numero2) {
  echo "Sim";
} else {
  echo "Não";
}

//Verifica se $numero1 é idêntico a $numero2
if ($numero3 === $numero2) {
  echo "Sim";
} else {
  echo "Não";
}

//Verifica se $numero1 não é idêntico a $numero2
if ($numero1 !== $numero2) {
  echo "Sim";
} else {
  echo "Não";
}

/*Define o inteiro 1 como resultado da comparação,
pois $numero é maior que $numero2*/
if ($numero1 <=> $numero2) {
  echo "Sim";
} else {
  echo "Não";
}
?>