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
		<div class="container d-flex">
			<div class="card mb-3 bg-transparent d-flex " style="">
			  <div class="row g-0 justify-content-center">
			    <div class="col-md-5">
			      <img src="images/sobre-mim/nome.png" class="img-fluid rounded-start" style=" max-height: none !important; max-width: none !important; height: auto; width: 90%;" alt="Minha Foto">
			    </div>
			    <div class="col-md-7">
			      <div class="card-body text-center">
			        <h1 class="card-title">Sobre Mim</h1>
			        <p class="card-text text-light text-break">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			      </div>
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
		      <h1 class="card-title text-center">Almoços</h1>
		    </div>
		  </div>
		</div>
	</section>

	<!-- Aqui Começa o Instragram
	<?php include_once('instragram.php') ?>
Codigo do instragram ficou imenso por isso eu retirei-->

	<!--INICIO Footer-->
	<?php include_once('footer.php') ?>
