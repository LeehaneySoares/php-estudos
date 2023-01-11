<?php
  foreach($_POST as $key => $value) {
    echo "$key: $value</br>";
  }

  foreach($_POST['uf'] as $states => $state) {
    echo "$states: $state </br>";
  }
?>