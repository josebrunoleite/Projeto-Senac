<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Formulario</title>
	<?php include("body/header.php");?>
</head>
<body>
	<?php include('navbar.php')?>
	<?php include('tester.php') ?>
	<h1 class="text-center mt-3"> Formulário para contato</h1>
	<p class="text-center">Preencha o formulário abaixo e aguarde o contato</p>
	<form class="container" method="POST" action="libmail/envia-form.php">
	<div class="input-group mb-3">
	  <input type="text" class="form-control" placeholder="Insira seu Nome" aria-label="nome" aria-describedby="basic-addon1" name="Nome">
	</div>
	<div class="input-group mb-3">
	  <input type="text" class="form-control" placeholder="Insira o motivo" aria-label="Motivo" aria-describedby="basic-addon1" name="motivo">
	</div>

	<div class="input-group mb-3">
	  <input type="text" class="form-control" placeholder="Coloque seu email pra resposta" aria-label="Recipient's username" aria-describedby="basic-addon2" name="email">
	  <span class="input-group-text" id="basic-addon2">@exemplo.com</span>
	</div>

	<div class="input-group mb-3">
	  <span class="input-group-text">Comente!</span>
	  <textarea class="form-control" aria-label="With textarea" name="comente"></textarea>
	</div>
	  </div>
  <button type="submit" class="color btn btn-primary">Enviar</button>
</form>

</body>
<?php include('footer.php')?>
