<?php

$variavel = "Dev";
$variavel = $variavel . "media! ";

$variavel2 = "Plataforma";
$variavel2 .= " para programadores!";

echo $variavel . $variavel2;
?>

<?php
$num1 = 2;
$num2 = 4;
$num3 = 6;

//Resultado igual a 2
$resposta1 = $num2 - $num1;

//Resultado igual a 8
$resposta2 = $num3 + $num1;

//Resultado igual a 12
$resposta3 = $num1 * $num3;

//Resultado igual a 2
$resposta4 = $num2 / $num1;

//Resultado igual a 2, já que o resto da divisão de 8 por 6 é igual a 2
$resposta5 = $resposta2 % $num3;
?>




<?php
//Operadores de decremento e incremento
$num1 = 2;
$num2 = 4;
$num3 = 6;
$num4 = 8;

//Resultado igual a 3
$resposta1 = ++$num2 - $num1;

//Resultado igual a 8
$resposta2 = $num3-- + $num1;

//Resultado igual a 9
$resposta3 = --$num1 + $num4;
?>

<?php
//Operadores de atribuição
$num = 10;
$num += 5;

//Declaração das variáveis e atribuições simples
$SOMAR = 0;
$numero1 = 2;
$numero2 = 3;
$numero3 = 4;

//Atribuição com adição
$SOMAR += $numero1;
$SOMAR += $numero2;

//Atribuição com multiplicação
$SOMAR *= $numero3;

//Atribuição com módulos
$SOMAR %= 3;

echo $SOMAR;
?>