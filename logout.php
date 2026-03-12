<?php
$backgroundImage = "img/background.png";
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="Style.css">
  <link href="https://fonts.cdnfonts.com/css/strawberry-shortcake-new" rel="stylesheet">


  <style>
    body {
      background-image: url('<?php echo $backgroundImage; ?>');
      background-size: cover;
      background-position: center;
      font-family: var(--fonte-principal);
    }

    .container_button_back {
      position: absolute;
      top: 20px;
      left: 50%;
      transform: translateX(-50%);
      text-align: center;
    }


    .logo {
      position: absolute;
      top: 20px;
      left: 100px;
      z-index: 10;
    }

    .logo img {
      width: 100px;
      height: auto;
    }

    .button-back {
      width: 150px;
      height: 150px;
      background-image: url('img/Strawberry.png');
      background-size: contain;
      background-repeat: no-repeat;
      background-color: transparent;
      border: none;
      cursor: pointer;
    }

    .btn {
      position: fixed;
      bottom: 30px;
      left: 50%;
      transform: translateX(-50%);
      width: 150px;
      height: 90px;
      background-image: url('img/entrar.png');
      background-size: contain;
      background-repeat: no-repeat;
      background-color: transparent;
      border: none;
      cursor: pointer;
    }

    .login_logo {
      display: flex;
      justify-content: center;
      width: 100%;
      margin-bottom: 40px;
      text-align: center;
    }

    .login_logo img {
      width: 340px;
      max-width: 80%;
      height: auto;
      filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.2));
    }

    .form input {
      display: block;
      margin: 10px auto;
      padding: 10px;
      width: 80%;
      border-radius: 10px;
      border: 2px solid #B82924;
      font-family: var(--fonte-principal);
      background-color: #FEDFDF;
      color: #EE435E;
      padding-left: 2em;
    }
  </style>



<body>

  <div class="login_logo">
    <img src="img/Login_banner.png" alt="Login banner">
  </div>

  <div class="logo">
    <div class="container_button_back">
 <button class="button-back" onclick="window.location.href='index.php'" title="Voltar"></button> </div>
    </div>
  </div>

  <div class="forms">
    <form action="login_concluido.php" method="post" class="form">
      <input type="text" name="cpf" placeholder="CPF">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="senha" placeholder="Senha" required>
      <div>
        <button type="submit" class="btn"></button>
      </div>
    </form>
  </div>

</body>

</html>