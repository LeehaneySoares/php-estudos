<?php
  session_start();
  
  unset($_SESION['nome']);
  session_destroy();
  header('Location: login.php');
  exit;
?>