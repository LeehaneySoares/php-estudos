<?php
  global $nome;
  global $email;
  global $senha;

  $nome = filter_input(INPUT_POST, 'nome');
  $email = filter_input(INPUT_POST, 'email');
  $senha = filter_input(INPUT_POST, 'senha');

  if (isset($nome) && isset($email) && isset($senha)) {
    
    header('location: index.php');
    exit;
  }
?>