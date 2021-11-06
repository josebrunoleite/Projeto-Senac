<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
<nav id="sidebarMenu" class="col-md-3 col-lg-2 text-white bg-dark pt-3 mw-100  navbar-expand-lg">
	<?php echo '<h2 style="font-size: 30px;">Bem-vindo, '.$_SESSION['nome'].'!</h2>'; ?>

	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background-color: white;">
        <i class="bi bi-text-center"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
	<ul class="nav flex-column">
		<li class="nav-item">
			<a href="view-cast.php">Dashboard</a>
		</li>
		<li class="nav-item">
			<a href="form-products.php">Cadastrar Produtos</a>
		</li>
		<li class="nav-item">
			<a href="">Atualizar Slides</a>
		</li>
		<li class="nav-item">
			<a href="">Atualizar Sobre Mim</a>
		</li>
		<form action="" method="POST">
		<li class="nav-item mb-2">
			<a href="index.php" name="sair">Sair</a>
		</li>
		</form>
	</ul>
</div>
</nav>