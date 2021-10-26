<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Projeto Senac</title>
	<?php include("body/header.php");?>
</head>
<header>
	<!--INICIO-->
	<?php include('navbar.php') ?>
</header>
<body>
	<!--INICIO imagem principal-->
	<section id="imag-up">
		<div id="title-up">
			<h1 style="color: red;">MarlucyGourmet</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
	</section>
	<!--INICIO Sobre-mim-->
	<section class="info">
		<div class="clearfix container">
			<div class="row">
				<div class="row">
			  		<img src="images/sobre-mim/nome.png" class="float-start" alt="...">
			  	</div>
			  	<div class="row">
				  	<div class="info-text">
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
			</div>
		</div>
	</section>
	<!--INICIO Cards Tripo-->
	<section id="CARD">
		
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

	<!-- Aqui Começa o Instragram
	<?php include_once('instragram.php') ?>
Codigo do instragram ficou imenso por isso eu retirei-->

	<!--INICIO Footer-->
	<?php include_once('footer.php') ?>
</body>
</html>
