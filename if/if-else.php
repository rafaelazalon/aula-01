<?php
//if / else
$a = 4;
$b = 2;

if ($a/$b == 2)
{
echo "O resultado da divisão é 2";
}
else
{
echo "O resultado da divisão não é 2";
}

echo "</br>";
//else if ou elseif

$a = 8;
$b = 2;

if ($a/$b==2)
{
echo "O resultado da divisão é 2";
}
elseif ($a/$b==4)
{
echo "O resultado da divisão é 4";
}
else
{
echo "O resultado da divisão não é 2 nem 4";
}

echo "</br>";

//operador ternário, antes dos dois pontos é o if, e após é o else
$a = 8;
$b = 2;

echo $a/$b == 2 ? "O resultado da divisão é 2" : "O resultado da divisão não é 2";

echo "</br>";
//SHORT FORM, forma curta do operador ternário

$nome = "Fulano de tal";
$nome = ($nome) ?: "Sem nome";

echo "</br>";
//exemplo prático
$idade = 18;

if ($idade >= 18)
{
$x = "É maior de idade";
}
else
{
$x = "É menor de idade";
}

echo $x;

echo "</br>";
//ex

$idade = 18;

$x = $idade >= 18 ? "É maior de idade" : "É menor de idade";

echo $x;

?>