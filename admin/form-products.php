<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Formuario de produtos</title>
	<link rel="stylesheet" href="../body/admin/header-admin.php">
</head>
<body>
		<div class="input-group">
		<form action="create-cast.php" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
			<input type="text" name="nome" class="input-group" placeholder="Nome">
			<select class="form-select" aria-label="Default select example">
			  <option selected>Selecione o tipo de comida</option>
			  <option value="almoco">almoço</option>
			  <option value="bolos">bolos</option>
			  <option value="especial">especias</option>
			</select>
			<input type="file" name="image" class="input-group" placeholder="">
			<input type="text" name="description" class="input-group" placeholder="Descrissão">
			<button type="submit" value="ENVIAR"class="btn btn-primary mb-3">ENVIAR</button>
		</form>
	</div>
</body>
</html>