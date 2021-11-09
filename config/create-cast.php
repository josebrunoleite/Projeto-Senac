<?php
include_once('../conec/connect.php');
 $stmt = $conn->prepare("INSERT INTO products (name, category, image, description) VALUES(:NAME, :CATEGORY, :IMAGE, :DESCRIPTION)");

$name = $_POST['nome'];
$category = $_POST['category'];
$description = $_POST['description'];

$arquivo = $_FILES['image'];

$arquivoNovo = explode('.', $arquivo['name']);
move_uploaded_file($arquivo['tmp_name'], '../images/images-cat/'.$arquivo['name']);

$image = 'images/images-cat/'.$arquivo['name'];

$stmt->bindParam(":NAME", $name);
$stmt->bindParam(":CATEGORY", $category);
$stmt->bindParam(":DESCRIPTION", $description);
$stmt->bindParam(":IMAGE", $image);
$stmt->execute();

header('Location: ../admin/view-cast.php');

?>