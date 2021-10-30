<?php 
include_once('config/connect.php');

$cat = $_GET['cat'];

$stmt = $conn->prepare('SELECT * FROM products WHERE category = :cat');

$stmt->execute(array('cat' => $cat));

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Bolos</title>
    <?php include_once('body/header.php'); ?>

</head>
<?php include_once('navbar.php'); ?>
<body>
    <!-- Imagem Principal (Bolos) -->
<section id="imag-up">
		<div id="title-up">
			<h1>
                <?php 
                if ($cat == $bolos) {
                    echo "Bolos";
                }elseif ($cat == $especiais) {
                    echo "Especiais";
                }else ($cat == $almocos) {
                    echo "Almoços";
                }?>
        </h1>
		</div>
	</section>
    <!-- Cards -->
    <!-- <linha1> -->
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <?php foreach ($results as $products): ?>
            <div class="col">
                    <div class="card">
                    <img src="<?= $products['image'] ?>" class="card-img-top" alt="<?= $products['title'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $products['title'] ?></h5>
                        <p class="card-text"><?= $products['description'] ?></p>
                    </div>
                    </div>
            </div>
        <?php endforeach; ?>
    </div>

<?php include('footer.php'); ?>
