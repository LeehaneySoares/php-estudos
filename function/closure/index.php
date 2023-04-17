<?php
  $closure = fn(int $n1): mixed => fn(int $n2) => ($n1 * 100) / $n2;

  define("RESULT", $closure(24)(50));

  echo RESULT;
?>