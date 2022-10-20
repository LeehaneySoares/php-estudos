<?php

  $nomeSujo = '       Leehaney        ';
  $nomeLimpo = trim($nomeSujo);
  echo "Nome sujo: $nomeSujo ".strlen($nomeSujo)."</br>";
  echo "Nome limpo: $nomeLimpo ".strlen($nomeLimpo)."</br>";

  $nomeCaixaAlta = 'LEEHANEY';

  echo strtolower($nomeCaixaAlta)."</br>";
  echo strtoupper($nomeCaixaAlta)."</br>";

  $dinheiro = 'R$ 15,00';

  echo str_replace('R$', '', $dinheiro)."</br>";

  $nome = 'Leehaney';

  echo "...".substr($nome, -5, 5);
?>