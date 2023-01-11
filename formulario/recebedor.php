<?php
  global $nome;
  global $email;
  global $senha;

  $nome = filter_input(INPUT_POST, 'nome');
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_NUMBER_INT);

  if ($nome && $email) {
    echo "Nome: $nome </br>";
    echo "Email: $email </br>";
    echo "Senha: $senha </br>";
  } else {
    header('location: index.php');
    exit;
  }
?>