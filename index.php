<?php 
  require_once("connect.php");
  session_start();
  $conn->close();
?>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title>Adote um Pet</title>
<!--     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
    <link href="css/style.css" rel="stylesheet"/>
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
	
	<section class="row" id="myCarousel">
		<div class="box_carrossel">
			<!-- Wrapper for slides -->
			<div class="row carrossel"></div>
		</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel">
				<img src="images/Icon-left-arrow.png" alt="Next"></span>
			</a>
			<a class="right carousel-control" href="#myCarousel">
				<img src="images/Icon-left-arrow.png" alt="Next"></span>
			</a>

			<div class="carousel-indicators">
			<!-- Indicators -->
				<ol></ol>
			</div>
	</section>

<?php require("footer.php") ?>
</body>
</html>