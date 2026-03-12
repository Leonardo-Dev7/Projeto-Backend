<?php
$backgroundImage = "img/Index.png";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strawberry Shortcake Store</title>
  <link rel="stylesheet" href="Style.css">
  <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/strawberry-shortcake-new">

  <style>
    body {
      background-image: url('<?php echo $backgroundImage; ?>');
      background-size: cover;
      background-position: center;
      background-repeat: repeat;
      font-family: var(  --fonte-principal);
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      color: #b82924;
    }

    .logo {
      position: absolute;
      top: 20px;
      left: 20px;
      z-index: 10;
    }

    .logo img {
      width: 100px;
      height: auto;
    }


    .Store_logo {
      display: flex;
      justify-content: center;
      width: 100%;
      margin-bottom: 40px;
      text-align: center;
    }

    .Store_logo img {
      width: 340px;
      max-width: 80%;
      height: auto;
      filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.2));
    }

    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 90%;
      max-width: 400px;
    }

    .buttons {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: center;
      gap: 25px;
      width: 100%;
    }

    .btn {
      flex: 1 1 45%;
      min-width: 150px;
      background-color: #ffe4eb;
      color: #EE435E;
      padding: 12px 25px;
      border-radius: 20px;
      border: 3px solid #b82924;
      text-decoration: none;
      font-size: 1.1rem;
      font-weight: bold;
      cursor: pointer;
      transition: all 0.3s ease;
      text-align: center;
      box-sizing: border-box;
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.15);
    }

    .btn:hover {
      background-color: #ffb6c1;
      transform: scale(1.05);
    }

    @media (max-width: 768px) {
      .Store_logo img {
        width: 70vw;
      }

      .btn {
        font-size: 1rem;
        padding: 10px 15px;
      }
    }

    @media (max-width: 480px) {
      .buttons {
        flex-direction: column;
        align-items: center;
      }

      .btn {
        width: 80%;
        font-size: 1rem;
        padding: 10px 12px;
      }

      .Store_logo img {
        width: 80vw;
      }
    }
  </style>
</head>

<header>
  <div class="logo">
    <img src="img/Strawberry.png" alt="Strawberry Shortcake logo">
  </div>
</header>

<body>

  <div class="Store_logo">
    <img src="img/banner.png" alt="Strawberry Shortcake Store logo">
  </div>

  <div class="container">
    <div class="buttons">
      <a href="login.php" class="btn">Login</a>
      <a href="cadastro.php" class="btn">Cadastrar Funcionário</a>
    </div>
  </div>
</body>

</html>