<link rel="stylesheet" href="style.css">
<nav id="sidebarMenu" class="col-md-3 col-lg-2 text-white bg-dark pt-3">
	<?php echo '<h2 style="font-size: 30px;">Bem-vindo, '.$_SESSION['nome'].'!</h2>'; ?>
	<ul class="nav flex-column">
		<li class="nav-item">
			<a href="view-cast.php">Dashboard</a>
		</li>
		<li class="nav-item">
			<a href="form-products.php">Cadastrar Produtos</a>
		</li>
		<li>
			<a href="">Ver Produtos</a>
		</li>
		<li class="nav-item">
			<a href="">Atualizar Slides</a>
		</li>
		<li class="nav-item">
			<a href="">Atualizar Sobre Mim</a>
		</li>
		<form action="" method="POST">
		<li>
			<a href="index.php" name="sair">Sair</a>
		</li>
	</form>
	</ul>
</nav>