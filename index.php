<?php 
  require_once("select_animals.php");
  session_start();
?>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title>Adote um Pet</title>
    <link href="css/style.css" rel="stylesheet"/>
    <link href="vendor/slick/slick.css" rel="stylesheet"/>
    <link href="vendor/slick/slick-theme.css" rel="stylesheet"/>
</head>
<body>

<?php require("header.php") ?>

	<section class="row" id="first-section">
	    <article class="two-columns">
	        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
	    </article>
	    <figure class="two-columns">
				<img src="images/img-principal.jpg">
		</figure>
	</section>

	 <section class="row" id="second-section">
	    <article>
	        <header>
	            <h2>O título do artigo é aqui</h2>
	        </header>
	        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut arcu sed velit aliquam blandit. Suspendisse tempor vestibulum elit, id imperdiet lacus molestie vel. Vivamus dapibus diam non diam dapibus, ut aliquam ipsum viverra. In pretium posuere sodales. Suspendisse eu pretium justo. Cras vitae turpis sit amet dolor dignissim laoreet sed eu purus. Mauris quis neque nec ligula tempor dapibus non eget nibh. Fusce sodales est nec neque malesuada dignissim. Cras id fringilla leo. Etiam id imperdiet lacus, sed facilisis sem. Mauris egestas gravida lorem, in aliquet risus aliquam sit amet. Cras varius hendrerit leo vitae porta. Aliquam venenatis, augue at molestie sodales, leo mi efficitur ex, quis semper sem lacus sed justo.</p>
	    </article>
	</section>
	
	<div class="hr">
		<hr>
	</div>
	
	<section class="row">
		<div id="carousel">
			<?php foreach ($results as $result):?>
			<div class="item" id="carousel-item" style="width: auto !important; height: auto !important; padding:0 130px;">
				<a href="detail.php?id=<?= $result['id'] ?>">
					<figure>
						<img src="<?= $result['foto'] ?>">
					</figure>
					<h3><?= $result['nome'] ?></h3>
				</a>
			</div>
			<?php endforeach; ?>
		</div>
	</section>

<?php require("footer.php") ?>
<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="js/carrossel.js"></script>
</body>
</html>