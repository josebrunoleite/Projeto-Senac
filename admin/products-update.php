
<?php 
	$id = $_GET['id'];

	$stmt = $conn->prepare('SELECT id, name, category, image, description FROM products WHERE id = :id');

	$stmt->execute(array('id' => $id));
	
	$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
	
?>

<?php include_once('header.php'); ?>

<?php include_once('navbar.php'); ?>

<main class="col-md-9 col-lg-10">
	<h1 id="main-title">Atualizar Produto</h1>

</main>
<?php include_once('footer.php'); ?>