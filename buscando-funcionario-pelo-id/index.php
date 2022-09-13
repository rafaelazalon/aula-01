<?php
$funcionarios = array(
  array('id' => 1, 'nome' => 'João', 'salario' => 5000),
  array('id' => 22, 'nome' => 'Mauro', 'salario' => 560),
  array('id' => 8, 'nome' => 'Alice', 'salario' => 4300),
  );

foreach ($funcionarios as $i => $funcionario) {
  if ($funcionario['id'] == 22) {
        $busca = $funcionario;
        break;
  }
}

if (isset($busca)) {
  echo "Funcionário encontrado: {$busca['nome']} - {$busca['id']}";
} else {
  echo "Funcionário não encontrado";
}
?>