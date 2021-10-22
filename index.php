<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="body/style.css">
	<link rel="stylesheet" type="text/css" href="body/image.css">
	<title>Test-kun</title>
	<?php include("body/header.php");?>
</head>
<header>
	<!--INICIO-->
	<nav class="navbar navbar-expand-lg">
	  <div class="container-fluid container">
	    <a class="navbar-brand" href="#"><img id="logo" src="images/header/logo.png" alt="Logo"></a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" style="justify-content: flex-end;" id="navbarNav">
	      <ul class="navbar-nav">
	        <li class="nav-item">
	          <a class="nav-link" href="#">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Sobre-Mim</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Bolos</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Almoços</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Fale comigo</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>
</header>
<body>
	<!--INICIO imagem principal-->
	<section id="imag-up">
		<div id="title-up">
			<h2 id="Title-Ima"><img src="images/header/Reserva/marlucy gourmet.png" height="40px" alt="Logo"></h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
	</section>
	<!--INICIO Sobre-mim-->
	<section class="info">
		<div class="clearfix  container">
		  	<img src="images/sobre-mim/nome.png" class="col-md-3 float-start mb-3 ms-md-3" alt="...">
		  	<div class="text-center info-text">
			  <h1>
			    Sobre mim.
			  </h1>

			  <p>
			    As you can see the paragraphs gracefully wrap around the floated image. Now imagine how this would look with some actual content in here, rather than just this boring placeholder text that goes on and on, but actually conveys no tangible information at. It simply takes up space and should not really be read.
			  </p>

			  <p>
			    And yet, here you are, still persevering in reading this placeholder text, hoping for some more insights, or some hidden easter egg of content. A joke, perhaps. Unfortunately, there's none of that here.
			  </p>
			</div>
		</div>
	</section>

	<section>
		<!--INICIO Cards Tripo-->
		<div class="card-group">
		  <div class="card">
		    <img src="images/card/card-1.png" class="card-img-top " alt="...">
		    <div class="card-body">
		      <h1 class="card-title text-center">Bolos</h1>
		    </div>
		  </div>
		  <div class="card">
		    <img src="images/card/card-2.png" class="card-img-top " alt="...">
		    <div class="card-body">
		      <h1 class="card-title text-center">Especiais</h1>
		    </div>
		  </div>
		  <div class="card">
		    <img src="images/card/card-3.png" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h1 class="card-title text-center">Gourmet</h1>
		    </div>
		  </div>
		</div>
	</section>

	<!-- Aqui Começa o Instragram-->
	<section id="instra">
		<h1 class="text-center">Instragram</h1>
		<div class="row row-cols-1 row-cols-md-2 g-1">
		  <div class="col">
		    <div class="card h-60">
			</div>
		  </div>
		</div>
	</section>-->


	<!--INICIO Footer-->
	<div class="border-top">
		<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4">
		    <p class="col-md-4 mb-0 text-muted font-fot">&copy; 2021 Company, Inc</p>

		    <ul class="nav col-md-6 justify-content-end">
		      <li class="nav-item font-fot font-fot"><a href="#" class="nav-link px-5 text-muted">Home</a></li>
		      <li class="nav-item font-fot"><a href="#" class="nav-link px-5 text-muted">Features</a></li>
		      <li class="nav-item font-fot"><a href="#" class="nav-link px-5 text-muted">Pricing</a></li>
		      <li class="nav-item font-fot"><a href="#" class="nav-link px-5 text-muted">FAQs</a></li>
		      <li class="nav-item font-fot"><a href="#" class="nav-link px-5 text-muted">About</a></li>
		      <li class="ms-3"><a class=" bi bi-instagram text-muted" style="" href="#"><svg class="bi" width="24" height="24"></svg></a></li>
		      <li class="ms-3"><a class="bi bi-whatsapp text-muted" href="#"><svg class="bi" width="24" height="24"></svg></a></li>
		    </ul>
		  </footer>
		</div>
	<div class="b-example-divider"></div>
</body>
</html>
