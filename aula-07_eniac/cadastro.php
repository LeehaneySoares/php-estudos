<?php

  function formCompleted () {
    foreach ($_POST as $key => $value) {
      $default = isset($value) ? $value : null;
      echo strip_tags($default)."</br>";
    }
  }


  $nome = $_POST['nome'];
  $senha = filter_var($_POST['senha'], FILTER_SANITIZE_NUMBER_INT);
  $confirmSenha = $_POST['confirm'];
  $dataNasc = $_POST['dataNasc'];

  echo $senha;

  $notHasInfo = ($nome && $senha && $confirmSenha && $dataNasc);
  $differentPassword = ($senha !== $confirmSenha);

  if (!$notHasInfo) {
    header('location: index.php');
    exit;
  } elseif ($differentPassword) {
    echo "Sua senha está incorreta, tente novamente =/";
  } else {
    formCompleted();
  }


?>