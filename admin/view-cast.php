	
	<?php include_once('header.php'); ?>

	<?php include_once('navbar.php'); ?>

	<?php include_once('../tester.php'); ?>

	<!-- <editar postagens> -->
		<main class="col-md-9 col-lg-10">
			<h1 id="main-title">Produtos</h1>
			<table class="table" id="contacts-table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nome</th>
							<th scope="col">Categoria</th>
							<th scope="col">Ações</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($results as $post): ?>
							<tr>
							  <td scope="row"><?=$post["id"]?></td>
							  <td scope="row" class="text-capitalize"><?=$post["name"]?></td>
							  <td scope="row" class="text-capitalize"><?=$post['category']?></td>
							  <td scope="action">
							  	<a href="products-update.php?id=<?=$post['id']?>" title="">Editar</a>
							  	<a href="../config/delete-products.php?id=<?=$post['id']?>">Excluir</a>
							  </td>
							</tr>
					   	<?php endforeach;?>
					</tbody>
			</table>
		</main>
		<!-- </editar postagens> -->
	<?php include_once('footer.php?enviado=falhou'); ?>