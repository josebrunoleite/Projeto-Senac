	
	<?php include_once('header.php'); ?>

	<?php include_once('navbar.php'); ?>

	<?php include_once('../tester.php'); 

$id = $_GET['id']??"bolos";

if ($id == 'bolos') {
    $stmt = $conn->prepare('SELECT * FROM products WHERE category = :ID');
    $stmt->execute(array('ID' => $id));
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
}elseif ($id == 'especial'){
    $stmt = $conn->prepare('SELECT * FROM products WHERE category = :ID');
    $stmt->execute(array('ID' => $id));
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
}elseif ($id == "almoco"){
    $stmt = $conn->prepare('SELECT * FROM products WHERE category = :ID');
    $stmt->execute(array('ID' => $id));
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
}else{
    header("Location: ?id=");
}
?>
	<!-- <editar postagens> -->
		<main class="col-md-9 col-lg-10">
			<h1 id="main-title" class="text-center titulo">Deseja ver <a href="?id=bolos" class="link-primary" title="">Bolos</a> ou  <a href="?id=especial" class="link-primary" title="">salgados</a> ou <a href="?id=almoco" class="link-primary" title="">Almoços</a></h1>
			<table class="table" id="contacts-table table-bordered">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nome</th>
							<th scope="col">Categoria</th>
							<th scope="col">Ações</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($result as $post): ?>
							<tr>
							  <td scope="row"><?=$post["id"]?></td>
							  <td scope="row" class="text-capitalize"><?=$post["name"]?></td>
							  <td scope="row" class="text-capitalize"><?=$post['category']?></td>
							  <td scope="action">
							  	<a href="products-update.php?id=<?=$post['id']?>" class="link-dark">Editar</a>
							  	<a href="../config/delete-products.php?id=<?=$post['id']?>" class="link-dark">Excluir</a>
							  </td>
							</tr>
					   	<?php endforeach;?>
					</tbody>
			</table>
		</main>
		<!-- </editar postagens> -->
	<?php include_once('footer.php'); ?>