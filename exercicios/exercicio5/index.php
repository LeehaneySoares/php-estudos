<?php
  include('weekDay.php');

  $dateFormatter = fn(string $data, mixed $weekDay) =>
    date('d/m/Y \- ', strtotime($data)).$weekDay;

  $data = '20-9-2022';
  $day = date('D', strtotime($data));
  $weekDay = $week[$day];

  echo $dateFormatter($data, $weekDay).'<br/>';

  $a = 30;
  $b = 20;
  $c = $a + $b;

  echo $c.'<br/>';

  $b = 10;

  echo "$b, $c".'<br/>';

  $c = $a + $b;

  echo "$a, $b, $c".'<br/>';
  
  // [$a, $b] = [$b, $a];

  echo "O resultado de A é: $a e de B é $b";
?>