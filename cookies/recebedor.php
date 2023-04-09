<?php
  $nome = filter_input(INPUT_POST, 'nome');
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $senha = filter_input(INPUT_POST, 'senha');
  $expires = time() + (86400 * 30);

  if ($nome && $email && $senha) {

    setcookie('nome', $nome, $expires);

    echo "nome: $nome".PHP_EOL;
    echo "email: $email".PHP_EOL;
  } else {
    header('Location: index.php');
    exit;
  }

?>