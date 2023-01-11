<?php
  $nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
  $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

  echo "
    Nome: $nome </br>"."
    Email: $email </br>"."
    Idade: $idade </br>"."
    Senha: $senha
  ";
?>