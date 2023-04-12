<?php
  // $fb = fopen('file.txt', 'r'); // Abre o arquivo e retorna um identificador

  // if (feof($fb)) { // Verifica se o arquivo já foi lido, retorna TRUE se o ponteiro estiver no final e FALSE caso não tenha terminado
  //   echo 'Cheguei ao fim';
  // } else {
  //   echo ' Não cheguei ao fim';
  // }

  // fclose($fb);

  $file = fopen('file.txt', 'r'); // abrindo o arquivo

  while (!feof($file)) { //verificando se o ponteiro chegou ao final
    $buffer = fgets($file, 4096); //  lendo o arquivo

    echo $buffer;
  }

  fclose($file); // fechando o arquivo, após aberto deve ser fechado!
?>