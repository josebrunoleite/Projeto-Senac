<?php
include('../conec/connect.php');

$id = $_POST['id'];
$name = $_POST['nome'];
$category = $_POST['category'];
$description = $_POST['description'];

$arquivo = $_FILES['image'];

$stmt = $conn->prepare('UPDATE products SET id = :ID, name = :NAME, category = :CATEGORY, image = :IMAGE, description = :DESCRIPTION WHERE id = :ID');

$arquivoNovo = explode('.', $arquivo['name']);
move_uploaded_file($arquivo['tmp_name'], '../images/images-cat/'.$arquivo['name']);

$image = 'images/images-cat/'.$arquivo['name'];

echo"$id $name $category $description $image";

$stmt->bindParam(':ID', $id);
$stmt->bindParam(':NAME', $name);
$stmt->bindParam(':CATEGORY', $category);
$stmt->bindParam(':IMAGE', $image);
$stmt->bindParam(':DESCRIPTION', $description);
$stmt->execute();

	header('Location: ../admin/view-cast.php');

?>
