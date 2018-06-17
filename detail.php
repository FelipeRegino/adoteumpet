<?php
	require_once('pick_animal.php');
?>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title>Detalhes</title>
    <link href="css/style.css" rel="stylesheet"/>
</head>
<body>

<?php require("header.php") ?>

	<section class="row" id="first-section">
	    <article class="two-columns">
	        <h1 id="nome"><?= $result['nome'] ?></h1>
	    </article>
	    <figure class="two-columns">
				<img id="foto" src="<?= $result['foto'] ?>" alt="foto do bicho">
		</figure>
	</section>

	 <section class="row" id="second-section">
	    <article>
	        <header>
	            <h2>Detalhes</h2>
	        </header>
	        <ul>
	        	<li>Espécie: <b><span id="especie"><?= $result['especie'] ?></span></b></li>
	        	<li>Raça: <b><span id="raca"><?= $result['raca'] ?></span></b></li>
	        	<li>Cor: <b><span id="cor"><?= $result['cor'] ?></span></b></li>
	        	<li>Idade: <b><span id="idade"><?= $result['idade'] ?></span></b></li>
	        	<li>Sexo: <b><span id="sexo"><?= $result['sexo'] ?></span></b></li>
	        	<li>Cadastrado: <b><span id="cadastrado"><?= $result['cadastrado'] ? "sim" : "não" ?></span></b></li>
	        	<li>
	        		Vacinas:
					<?php foreach ($result['vacinas'] as $vacina):?>					
					<ul id="vacinas">
						<?= $vacina['nome'] ?>
					</ul>
					<?php endforeach ?>
	        	</li>
	        </ul>

	        <a href="index.php">
	        	<button>Voltar</button>
	        </a>
	    </article>
	</section>
	
	<div class="hr">
		<hr>
		<br>
	</div>

<?php require("footer.php") ?>

</body>
</html>