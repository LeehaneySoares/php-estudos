<?php
  # Informações para conectar com o mySQL
  define('DB_HOST', 'localhost');
  define('DB_NAME', 'ua10');
  define('DB_USER', 'root');
  define('DB_PASS', '');

  # Habilitar exibição de erros
  ini_set('display_errors', true);
  error_reporting(E_ALL);

  # Inclui arquivo connection
  require_once('./connection.php');
?>