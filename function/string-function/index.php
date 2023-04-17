<?php

  $nomeSujo = '       Leehaney        ';
  $nomeLimpo = trim($nomeSujo);
  echo "Nome sujo: $nomeSujo ".strlen($nomeSujo)."</br>";
  echo "Nome limpo: $nomeLimpo ".strlen($nomeLimpo)."</br>";

  $nomeCaixaAlta = 'LEEHANEY';

  echo strtolower($nomeCaixaAlta).'</br>';
  echo strtoupper($nomeCaixaAlta).'</br>';

  $dinheiro = 'R$ 15,00';

  echo str_replace('R$', '', $dinheiro).'</br>';

  $nome = 'Leehaney';

  echo "...".substr($nome, -5, 5).'</br>';

  $nomeCompleto = 'leehaney | soares | ferreira';

  echo "Os caracteres (Soa) de { $nomeCompleto } começa na posição: ".strpos($nomeCompleto, 'Soa').'</br>';

  echo ucfirst($nomeCompleto).'</br>';
  echo ucwords($nomeCompleto).'</br>';

  $nomeTeste = 'Leehaney Soares Ferreira ';
  $nameArray = explode(' ', $nomeTeste);

  [$firstName, $secondName, $lastName] = $nameArray;

  echo "
    Primeiro nome: $firstName,".'</br>'.
    "Segundo nome: $secondName,".'</br>'.
    "Terceiro nome: $lastName".'</br>';

    echo addslashes('\Leehaney\Soares').'<br/>';

    $newName = chunk_split($nomeTeste, strlen($nomeTeste), '|');

    print_r($newName);
?>