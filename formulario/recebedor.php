<?php
  $nome = filter_input(INPUT_POST, 'nome');
  $email = filter_input(INPUT_POST, 'email');
  $senha = filter_input(INPUT_POST, 'senha');

  echo "Nome: $nome </br>".PHP_EOL;
  echo "Email: $email </br>".PHP_EOL;
  echo "Senha: $senha".PHP_EOL;
?>