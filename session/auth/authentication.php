<?php
  session_start();

  $user = $_POST['user'];
  $password = $_POST['password'];

  if (($user === 'leehaneySoares') && ($password === 'grandchase')) {
    header("location: ../pages/home.php");
    exit;
  } else {
    $_SESSION['error'] = 'Por favor, preencha os campos corretamente!';
    header("location: ../index.php");
    exit;
  }
?>