<?php
  $time = '2022-09-26';

  $timestamp = strtotime($time);

  echo $timestamp.'<br/>';

  $data = '1995-09-22 14:32';

  echo date('Y-m-d H:i', strtotime($data))

?>