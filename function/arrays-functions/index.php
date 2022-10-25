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

  echo '</br>';

  // Removendo o último elemento de um array

  $teste1 = array_pop($numeros);
  $teste2 = array_shift($numeros);

  print_r($teste1);
  print_r($teste2);

  echo '</br>';

  // Verificando existência de algum elemento no array

  echo 'O valor 87 existe em meu array ? </br>';
  print_r($numeros);
  echo '</br>';

  echo in_array(87, $numeros) ? 'Existe </br>' : 'NÃO existe </br>';

  $nomes = ['Leehaney', 'João', 'Douglas', 'Erick', 'Leonardo'];

  echo 'Existe o nome Douglas em minha lista ? </br>';

  echo in_array('Maria', $nomes) ? 'Existe </br>' : 'Não existe </br>';

  // Descobrindo a posição de um elemento no array

  $searchName = 'Cleber';
  $posicao = array_search($searchName, $nomes);

  echo is_int($posicao) ? "O nome $searchName, está na posição: $posicao <br/>" : 'Nome não encontrado <br/>';

  $newNumeros = [91, 34, 22, 61, 73, 80, 10, 9];

  arsort($newNumeros);

  print_r($newNumeros);

  echo '</br>';

  $nomeArray = explode(' ', 'Leehaney Soares Ferreira');

  asort($nomeArray);

  print_r($nomeArray);
?>