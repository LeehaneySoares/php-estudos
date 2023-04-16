<?php
  $file = fopen('file.txt', 'r');

  while(!feof($file)) {
    $buffer = fgets($file, 4029);
    echo $buffer;
  }

  fclose($file);
?>