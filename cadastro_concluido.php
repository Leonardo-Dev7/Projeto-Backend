<?php
$backgroundImage = "img/Background.png";
$mensagem = isset($_GET['error']) ? $_GET['error'] : '';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Cadastro de Usuário</title>
  <link rel="stylesheet" href="Style.css">
  <link href="https://fonts.cdnfonts.com/css/strawberry-shortcake-new" rel="stylesheet">

  <style>
    /* estilos da página de cadastro */
    body {
      background-image: url('<?php echo $backgroundImage; ?>');
      background-size: cover;
      background-position: center;
      margin: 0;
      font-family: 'Strawberry Shortcake New', cursive;
      color: #B82924;
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

    .cadastro_logo {
      display: flex;
      justify-content: center;
      width: 100%;
      margin-top: 40px;
      text-align: center;
    }

    .cadastro_logo img {
      width: 340px;
      max-width: 80%;
      height: auto;
      filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.2));
    }

    .main-container {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      gap: 40px;
      margin-top: 40px;
      flex-wrap: wrap;
    }

    /* CORREÇÃO 1: Adicionado um estilo para a mensagem de erro */
    .mensagem-erro {
      width: 100%; 
      text-align: center; 
      margin-bottom: 20px;
      /* Faz o flex-container quebrar a linha */
      flex-basis: 100%; 
    }

    .mensagem-erro span {
      display: inline-block; 
      font-size: 18px; 
      color: #B82924; 
      background: #FEDFDF; 
      border: 2px solid #B82924; 
      padding: 10px; 
      border-radius: 10px;
    }

    .form {
      text-align: center;
      width: 400px;
    }

    .form input {
      font-family: var(--fonte-principal);
      display: block;
      margin: 10px auto;
      padding: 10px;
      width: 80%;
      border-radius: 10px;
      border: 2px solid #B82924;
      color: #EE435E;
      background-color: #FEDFDF;
      font-size: 16px;
      text-align: center;
    }

    .right-side {
      display: flex;
      flex-direction: column;
      align-items: flex-end;
      gap: 15px;
    }

    .side-box {
      background: #FEDFDF;
      border: 2px solid #B82924;
      border-radius: 20px;
      padding: 20px;
      width: 260px;
      text-align: left;
    }

    .checkboxes label {
      display: block;
      margin-bottom: 10px;
      font-size: 14px;
    }

    .btn {
      width: 170px;
      height: 70px;
      background-image: url('img/entrar.png');
      background-size: contain;
      background-repeat: no-repeat;
      background-color: transparent;
      border: none;
      cursor: pointer;
      margin-top: 5px;
      margin-right: 25px;
    }

    input[type="checkbox"] {
      accent-color: #B82924;
    }
  </style>
</head>

<body>
  <div class="cadastro_logo">
    <img src="img/cadastro_banner.png" alt="Cadastro banner">
  </div>

  <div class="logo">
    <div class="container_button_back">
      <button class="button-back" onclick="window.location.href='index.php'" title="Voltar"></button> </div>
  </div>


  <div class="main-container">

    <?php if (!empty($mensagem)): ?>
        <div class="mensagem-erro">
            <span><?php echo $mensagem; ?></span>
        </div>
    <?php endif; ?>
    <form id="form" action="cadastro_concluido.php" method="post" class="form">
      <input type="text" name="nome" placeholder="Nome Completo" required>
      <input type="text" name="cpf" placeholder="CPF" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="senha" placeholder="Senha" required>
      <input type="password" name="confirmar_senha" placeholder="Confirme a Senha" required>
    </form>

    <div class="right-side">
      <div class="side-box">
        <div class="checkboxes" style=" color: #1E1E1E;">
          
          <label><input type="checkbox" name="termos" required form="form"><b>Termos de Uso e Responsabilidade</b>
            <div style="color: #1E1E1E">
              Para pode acessar a loja, o usuário precisa aceitar os <a href="#">termos de uso e
                responsabilidade</a></div>
          </label>
          
          <label><input type="checkbox" name="novidades" form="form"><b>Newsletter e Notificações</b>
            <div style="color: #1E1E1E">
              Aceita receber emails e notificações sobre novos produtos e promoções</div>
          </label>

        </div>
      </div>

      <div>
        <button type="submit" form="form" class="btn"></button>
      </div>
    </div>
  </div>
</body>

</html>