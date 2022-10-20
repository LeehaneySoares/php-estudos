<?php
  $lista = ['Leehaney', 'Valmira', 'Betania', 'Taylor'];
  $quantity = count($lista);

  echo "O total de elementos no array é: $quantity".'</br>';

  $candidatos = ['Leehaney', 'Felipe', 'Lucas', 'Valmira', 'Rafael', 'Eduardo'];
  $aprovados = ['Leehaney', 'Valmira', 'Lucas'];
  $reprovados = array_diff($candidatos, $aprovados);

  echo "<h2>Candidatos que não foram aprovados: </h2>".'</br>';
  print_r($reprovados)
  
?>