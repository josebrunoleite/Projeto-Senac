<?php include_once('conec/connect.php'); ?>
<?php
$stmt = $conn->prepare("SELECT * FROM home WHERE id = :ID");
$stmt->execute(array('ID' => '1'));
$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
//SEPARAÇÃO O DE CIMA É DO SOBRE MIM E O DE BAIXO É DO SLIDE
$st = $conn->prepare("SELECT * FROM home WHERE id = :ID");
$st->execute(array('ID' => '2'));
$resul = $st->fetchALL(PDO::FETCH_ASSOC);
?>
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
	<?php foreach ($resul as $up):?>
	<section id="imag-up" style="background-image: url(images/slide/padaria.png);">
		<div id="title-up">
			<h1 style="color: red;"><?=$up['title']?></h1>
			<p class="text-break"><?=$up['description']?></p>
		</div>
	</section>
	<?php endforeach; ?>
	<!--INICIO Sobre-mim-->
	<section class="info">
		<div class="container d-flex">
			<div class="card mb-3 bg-transparent d-flex " style="">
			  <div class="row g-0 justify-content-center">
			    <div class="col-md-5">
				<?php foreach($results as $post): ?>
			      <img src="<?=$post["image"]?>" class="img-fluid rounded-start" style=" max-height: none !important; max-width: none !important; height: auto; width: 90%;" alt="Minha Foto">
			    </div>
			    <div class="col-md-7">
			      <div class="card-body text-center">
			        <h1 class="card-title text-breake"><?=$post["title"]?></h1>
			        <p class="card-text text-light text-break"> <?=$post["description"]?> </p>
			      </div>
			    </div>
			    <?php endforeach; ?>
			  </div>
			</div>
		</div>
	</section>
	<!--INICIO Cards Tripo-->
	<section id="CARD">
		
		<div class="card-group py-3">
		  <div class="card">
		  	<a href="category.php?cat=bolos" class="text-center">
		    <img src="images/card/card-1.png" class="card-img-top " alt="...">
		    </a>
		    <div class="card-body">
		      <h1 class="card-title text-center">Bolos</h1>
		    </div>
		  </div>
		  <div class="card">
		  	<a href="category.php?cat=especial" class="text-center">
		    <img src="images/card/card-2.png" class="card-img-top " alt="...">
		    </a>
		    <div class="card-body">
		      <h1 class="card-title text-center">Especiais</h1>
		    </div>
		  </div>
		  <div class="card">
		  	<a href="category.php?cat=almoco" class="text-center">
		    <img src="images/card/card-3.png" class="card-img-top" alt="...">
		    </a>
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
	<!-- whatsapp button -->

<div id="btn-whatsapp">
    <a href="https://api.whatsapp.com/send/?phone=5571986659473" target="_blank">
        <i class="bi bi-whatsapp"></i>
    </a>
</div>