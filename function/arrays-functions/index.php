<?php

  // Contando quantos elementos possui um array

  $lista = ['Leehaney', 'Valmira', 'Betania', 'Taylor'];
  $quantity = count($lista);

  echo "O total de elementos no array é: $quantity".'</br>';

  // Verificando se os elementos de um array é diferente de outro 

  $candidatos = ['Leehaney', 'Felipe', 'Lucas', 'Valmira', 'Rafael', 'Eduardo'];
  $aprovados = ['Leehaney', 'Valmira', 'Lucas'];
  $reprovados = array_diff($candidatos, $aprovados);

  echo "<h2>Candidatos que não foram aprovados: </h2>".'</br>';
  print_r($reprovados);

  // Filtrando elementos de um array

  $numeros = [10, 24, 56, 34, 22, 60, 87, 76];

  $filtrados = array_filter($numeros, fn($item) => ($item < 38));
  
  echo "<h2>Os números sortiados foram: </h2>".'</br>';
  print_r($filtrados);

  $double = array_map(fn($item) => $item * 2, $numeros);
  echo "<h2>o dobro dos números são: </h2>".'</br>';
  print_r($double);
?>