	<header>
		<a href="index.php"><h1 id="logo">Adote um Pet</h1></a>
	    <nav class="topnav">
        <ul>
        <?php if($_SESSION['email']): ?>
          <li>
            <a href="logout.php">Sair</a>
          </li>
	        <li>
            <a>Olá, <?= $_SESSION['nome']?></a>
          </li>
        <?php else: ?>
          <li>
            <a href="login.php">login</a>
          </li>
          <li>
            <a href="register.php">cadastre-se</a>
          </li>
        <?php endif ?>
        </ul>
      </nav>
	</header>