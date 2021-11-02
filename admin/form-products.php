<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Formuario de produtos</title>
	<link rel="stylesheet" href="../body/admin/header-admin.php">
</head>
<?php
session_start();
if ($_SESSION['logado'] != true) {
	session_destroy();
	header("Location: index.php");
}
?>
<body>
		<div class="input-group">
		<form action="create-cast.php" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
			<input type="text" name="nome" class="input-group" placeholder="Título">
			<select class="form-select" aria-label="Default select example">
			  <option selected>Tipo de comida</option>
			  <option value="almoco">Almoços</option>
			  <option value="bolos">Bolos</option>
			  <option value="especial">Especias</option>
			</select>
			<input type="file" name="image" class="input-group" placeholder="">
			<input type="text" name="description" class="input-group" placeholder="Descrição">
			<button type="submit" value="ENVIAR"class="btn btn-primary mb-3">Enviar</button>
		</form>
	</div>
</body>
</html>