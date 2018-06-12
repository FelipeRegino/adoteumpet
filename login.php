<?php
  session_start();
?>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title>Login | Adote um Pet</title>
    <link href="css/style.css" rel="stylesheet"/>
</head>
<body>

<?php require("header.php") ?>
	<section class="row" id="first-section">
	  <?php if($_SESSION['message']): ?>
      <p><?=$_SESSION['message']?></p>
    <?php endif ?>
    <form action="login_user.php" method="POST">
      <label for="email">Email:</label>
      <input type="email" name="email" placeholder="teste@email.com" required>  
      <label for="senha">Senha:</label>
      <input type="password" name="senha" placeholder="*******" required>  
      <button>Enviar</button>
    </form>
	</section>

<?php require("footer.php") ?>
</body>
</html>