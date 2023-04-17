<?php
  setcookie('nome', null, -1);
  unset($_COOKIE['nome']);

  header('Location: index.php');
  exit;
?>