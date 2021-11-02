<?php
include('../config/connect.php');


$stmt = $conn->prepare("SELECT * FROM products ORDER BY id");
$stmt->execute();

$result = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>
<?php
session_start();
if ($_SESSION['logado'] != true) {
	session_destroy();
	header("Location: index.php");
}
if (isset($_POST['sair'])) {
	$_SESSION = array();
	session_destroy();
	header("Location: index.php");
	die();
}
?>
<div class="container">
	<h1><a href="form-products.php" title="">Clique aqui para criar um novo!</a></h1>
	<form action="" method="POST">
	<input type="submit" value="Sair" name="sair">
	</form>
	 <?php echo '<h2>Bom dia, '.$_SESSION['nome'].'!</h2>'; ?>
	<?php foreach($result as $post):?>
	<h1 id="main-title"><?=$_POST['category']?></h1>
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
						  	<a href="form-upadte.php?id=<?$post['id']?>" title="">Editar</a>
						  	<a href="delete-cast.php?id=<?=$post['id']?>">X</a>
						  	<a href="" title="">Não está a funcionar, somente o delete</a>
						  </td>
						</tr>
				   	
				</tbody>
		</table>
		<?php endforeach;?>	
</div>