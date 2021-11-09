<?php
include('../config/connect.php');

$id = $_POST['id'];
$nome = $_POST['nome'];
$description = $_POST['description'];
$arquivoNovo = $_FILES['image'];

$stmt = $conn->prepare('UPDATE products SET id = :id, name = :name, category = :category, image = :image, description = :description WHERE id = :id');

$arquivoNovo = explode('.', $arquivo['name']);
move_uploaded_file($arquivo['tmp_name'], '../images/images-cat/'.$arquivo['name']);

$image = 'images/images-cat/'.$arquivo['name'];


$stmt->bindParam(':ID', $id);
$stmt->bindParam(':NAME', $name);
$stmt->bindParam(':CATEGORY', $category);
$stmt->bindParam(':IMAGE', $image);
$stmt->bindParam(':DESCRIPTION', $description);
$stmt->execute();
?>