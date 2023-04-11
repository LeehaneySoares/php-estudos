<?php
  session_start();

  $target = filter_input(INPUT_POST, 'nome');

  if (isset($target)) {
    $_SESSION['nome'] = $target;

    header('Location: index.php');
    exit;
  } else {
    header('Location: login.php');
    exit;
  }
?>