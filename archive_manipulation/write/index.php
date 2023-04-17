<?php
  function writeArchive ($text) {
    $file = fopen('./nome.txt', 'a');
    fwrite($file, $text, strlen($text));

    fclose($file);
  }

  function readArchive () {
    $file = fopen('./nome.txt', 'r');

    while(!feof($file)) {
      $buffer = fgets($file, 4029);

      return $buffer;
    }

    fclose($file);
  }

  $count = 0;

  while($count <= 2) {
    writeArchive("\n Leehaney esteve aqui $count");
    $count++;
  }

  echo readArchive()
?>