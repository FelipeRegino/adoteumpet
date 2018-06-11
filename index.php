<?php 
  $conn = mysqli_connect("127.0.0.1", "root", "", "adoteumpet");
  if(!$conn){
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
  }
  
  $results = $conn->query("SELECT * FROM animal");
  var_dump($results->fetch_object());
  $conn->close();
?>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title>Adote um Pet</title>
    <link href="css/style.css" rel="stylesheet"/>
</head>
<body>

	<header>
		<h1 id="logo">Adote um Pet</h1>
	    <nav class="topnav">
	        <ul>
	            <li>
	            	<a href="#">login</a>
	        	</li>
	        </ul>
	    </nav>
	</header>

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

	<footer>
		<p>Adote um Pet</p>
		<p>Rua Daqui a Pouco, Nº aquele mesmo</p>
		<p>4002-8922</p>
		<a href="mailto:contato@adoteumpete">contato@adoteumpet</a>
	</footer>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="js/carrossel.js"></script>
</body>
</html>