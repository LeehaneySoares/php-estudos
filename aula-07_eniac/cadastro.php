<?php

  $nome = strip_tags($_GET['nome']);
  $dataNasc = strip_tags($_GET['dataNasc']);
  $endereco = strip_tags($_GET['endereco']);
  $sexo = strip_tags($_GET['sexo']);

  echo "Nome: $nome </br>";
  echo "Endereco: $endereco </br>";
  foreach ($_GET['sexo'] as $key => $value) {
    echo "Sexo: $value </br>";
  }
  echo "Data Nascimento: $dataNasc </br>";

  // foreach ($_GET as $key => $value) {
  //   echo "$key: $value </br>";
  // }

  // foreach ($_GET['locomocao'] as $key => $value) {
  //   echo "$key: $value </br>";
  // }

?>