<?php
include('../config/connect.php');

$stmt = $conn->prepare("SELECT * FROM products ORDER BY id");
$stmt->execute();

$result = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>
<div class="container">
	<?php foreach($result as $post):?>
	<h1 id="main-title">Meus <?=$_POST['category']?></h1>
		<table class="table" id="contacts-table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nome</th>
						<th scope="col">Descrição</th>
						<th scope="col">Imagem</th>
						<th scope="col">Ações</th>
					</tr>
				</thead>
				<tbody>
					
						<tr>
						  <td scope="row"><?=$post["id"]?></td>
						  <td scope="row"><?=$post["name"]?></td>
						  <td scope="row"><?=$post["description"]?></td>
						  <td scope="row"><img src="<?=$post["image"]?>" width="80px" alt=""></td>
						  <td scope="action">
						  	<a href="viewBlog.php?id=<?=$post['id']?>"><i class="fas fa-eye check-icon">Ver</i></a>
						  	<a href="editar.php?id=<?$post['id']?>" title="">Editar</a>
						  	<a href="delete.php?id=<?=$post['id']?>">X</a>
						  	<a href="" title="">Não está a funcionar</a>
						  </td>
						</tr>
				   	
				</tbody>
		</table>
		<?php endforeach;?>	
</div>