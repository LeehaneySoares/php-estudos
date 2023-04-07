<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' type='text/css' href='./assets/css/style.css' />
  <title>Tela de login</title>
</head>
<body>
  <main class='login'>
    <form class='login__form' name='login' method='POST' action='./auth/authentication.php'>
      <header class='login__logo'>
        <img src='./assets/images/logo.png' alt='Leeh' />
        <hgroup class='login__hgroup'>
          <h1>Login in to your account</h1>
          <h4>Welcome back! Please enter your details.</h4>
        </hgroup>
        <?php
          session_start();

          if ($_SESSION['error']) {
            $session = $_SESSION['error'];
            echo "<span style='color: red;'>$session</span>";
          }

          $_SESSION['error'] = '';
        ?>
      </header>
      <div class='login__form-group'>
        <label for='user'>Usuário</label>
        <input type='text' name='user' placeholder='Seu nome de usuário' required />
      </div>
      <div class='login__form-group'>
        <label for='password'>Senha</label>
        <input type='password' name='password' placeholder='••••••••' required />
      </div>
      <div class='login__action'>
        <button class='login__button login' type='submit'>Entrar</button>
        <button class='login__button signup' type='button'>
          <a href='register.php'>Cadastre-se</a>
        </button>
      </div>
      <div class='login__help'>
        <a class='login__link' href='./helpers/forgout.php'>Esqueci a senha</a>
        <a class='login__link' href='./helpers/help.php'>Preciso de ajuda</a>
      </div>
    </form>
  </main>
</body>
</html>