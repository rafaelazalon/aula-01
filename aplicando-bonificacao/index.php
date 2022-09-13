<?php
$funcionarios = array(
  array('id' => 1, 'nome' => 'João', 'salario' => 5000),
  array('id' => 22, 'nome' => 'Mauro', 'salario' => 560),
  array('id' => 8, 'nome' => 'Alice', 'salario' => 4300),
  );

foreach ($funcionarios as $i => $funcionario) {
  if ($funcionario['salario'] >= 5000) {
        continue;
  }

  $funcionarios[$i]['salario'] = $funcionario['salario'] + ($funcionario['salario'] * 0.1);
}

foreach ($funcionarios as $funcionario) {
  echo $funcionario["nome"]." $".$funcionario["salario"]."\n";
}
?>