<?php

$dinheiro = 150.0;

$conta_luz = 65.0;
$conta_telefone = 40.0;
$conta_agua
 = 55.0;

$despesas = $conta_luz 
+ $conta_telefone +
 $conta_agua;

if(
$despesas <= 160
){
 echo "Com o dinheiro será possível pagar as despesas";
} else {
 echo "Não será possível pagar as despesas com o dinheiro";
}

?>