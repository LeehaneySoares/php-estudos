<?php
  $lista = ['Leehaney', 'Valmira', 'Betania', 'Taylor'];
  $quantity = count($lista);

  echo "O total de elementos no array é: $quantity".'</br>';

  $candidatos = ['Leehaney', 'Felipe', 'Lucas', 'Valmira', 'Rafael', 'Eduardo'];
  $aprovados = ['Leehaney', 'Valmira', 'Lucas'];
  $reprovados = array_diff($candidatos, $aprovados);

  echo "<h2>Candidatos que não foram aprovados: </h2>".'</br>';
  print_r($reprovados);

  $numeros = [10, 24, 56, 34, 22, 60, 87, 76];

  $filtrados = array_filter($numeros, fn($item) => ($item < 38));
  
  echo "<h2>Os números sortiados foram: </h2>".'</br>';
  print_r($filtrados);

  $teste = array_pop($numeros);

  print_r($teste);
?>