
<?php 
include('../config/connect.php');
	$id = $_GET['id'];

	$st = $conn->prepare("SELECT id, name, category, image, description FROM products WHERE id = :ID");

	$st->execute(array('ID' => $id));
	
	$resu = $st->fetchALL(PDO::FETCH_ASSOC);
	
?>

<?php include_once('header.php'); ?>

<?php include_once('navbar.php'); ?>
<main class="col-md-9 col-lg-10 p-4">
	<h1 id="main-title" class="text-center">Atualizar Produto</h1>
	<div class="input-group justify-content-center">	
	<form action="create-cast.php" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
		<?php foreach ($resu  as $products):?>	
		<input type="text" name="nome" class="input-group form-control" placeholder="<?=$products["name"]?>">
		<select class="form-select text-capitalize" aria-label="Default select example" name="category" id="category">
		  	<option selected value="<?=$products["category"]?>"><?=$products["category"]?></option>
		  	<option value="almoco">Almoços</option>
		  	<option value="bolos">Bolos</option>
		  	<option value="especial">Especias</option>
		</select>
		<div class="input-group">
		  <input type="file" name="image" class="input-group form-control" id="inputGroupFile02">
		</div>
		<input type="text" name="description" class="input-group form-control" placeholder="<?=$products['description']?>">
		<button type="submit" value="ENVIAR"class="btn btn-primary mb-3">Enviar</button>
		<img src="../<?=$products["image"]?>" class="img-thumbnail rounded float-end" alt="Imagem Existente" width="200px">
		<?php 	endforeach;	 ?>
		</form>
	</div>
	</main>
</main>

<?php include_once('footer.php'); ?>