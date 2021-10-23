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
	<h1 class="text-center mb-3"> Formulario para contato</h1>
	<form class="container">
	<div class="input-group mb-3">
	  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
	</div>
	<div class="input-group mb-3">
	  <input type="text" class="form-control" placeholder="Motivo" aria-label="Motivo" aria-describedby="basic-addon1">
	</div>

	<div class="input-group mb-3">
	  <input type="text" class="form-control" placeholder="Coloque seu email pra resposta" aria-label="Recipient's username" aria-describedby="basic-addon2">
	  <span class="input-group-text" id="basic-addon2">@exemplo.com</span>
	</div>

	<div class="input-group mb-3">
	  <span class="input-group-text">Comente!</span>
	  <textarea class="form-control" aria-label="With textarea"></textarea>
	</div>
	  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
<?php include('footer.php')?>
</html>