<div>
  Olá,
  <?php
    session_start();

    if ($_SESSION['nome']) {
      $nome = $_SESSION['nome'];
  
      echo "<em>$nome</em>";
    } else {
      header('Location: login.php');
      exit;
    }
  ?>
  <a href='destroySession.php'>Sair</a>
</div>