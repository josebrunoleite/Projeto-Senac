<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
<nav id="sidebarMenu" class="col-md-3 col-lg-2 text-white bg-dark pt-3 dark navbar-expand-lg">
	<h2 style="font-size: 30px; text-align: center;">Bem vindo, <?=$_SESSION['nome']?>!</h2>


	<button class="navbar-toggler dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background-color: white;">
        <i class="bi bi-text-center white-b"></i>
    </button>
    <div class="collapse dark navbar-collapse justify-content-center text-center" id="navbarNav">
	<ul class="nav flex-column dark">
		<hr>
		<li class="nav-item dark mt-1">
			<a href="view-cast.php">Dashboard</a>
		</li>
		<hr>
		<li class="nav-item dark mt-1">
			<a href="form-products.php">Cadastrar Produtos</a>
		</li>
		<hr>
		<li class="nav-item dark mt-1">
			<a href="form-home-slide.php">Atualizar Slides</a>
		</li>
		<hr>
		<li class="nav-item dark mt-1">
			<a href="form-home.php">Atualizar Sobre Mim</a>
		</li>
		<hr>
		<form action="deslogar.php" class="dark mt-1 ti">
		<li class="nav-item mb-2 dark">
			<a href="deslogar.php" name="sair" value="1">Sair</a>
		</li>
		</form>
		<hr>
	</ul>
</div>
</nav>