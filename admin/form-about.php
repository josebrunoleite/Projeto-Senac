<?php include_once('header.php'); ?>

<?php include_once('navbar.php'); ?>

<?php

$st=$conn->prepare("SELECT title, description, image FROM about");
//Para ativar a troca de titulo coloque acima title, e ative em baixo logo em seguida vá para o arquivo de alteração e faça o que é pedido
$st->execute();

$resul = $st->fetchALL(PDO::FETCH_ASSOC);
?>

<main class="col-md-9 col-lg-10 p-4">
	<h1 id="main-title" class="text-center">Atualizar Sobre Mim</h1>
	<div class="input-group justify-content-center">	
	<form action="../config/update-about.php" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
		<?php foreach ($resul  as $about):?>
		<input type="text" name="title" value=""class="input-group form-control" placeholder="<?=$about["title"]?>">
		<div class="input-group">
		  <input type="file" name="image" class="input-group form-control" id="inputGroupFile02">
		</div>
		<div class="input-group">
		  <span class="input-group-text">Insira Sua</br> Nova Descrição</span>
		  <textarea class="form-control" name="description"aria-label="With textarea" placeholder="<?=$about['description']?>"></textarea>
		</div>
		<button type="submit" value="ENVIAR"class="btn btn-primary mb-3">Enviar</button>
		<img src="../<?=$about["image"]?>" class="img-thumbnail rounded float-end" alt="Imagem Existente" width="200px">
		<?php 	endforeach;	 ?>
		</form>
	</div>
	</main>
</main>

<?php include_once('footer.php'); ?>