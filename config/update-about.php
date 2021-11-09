<?php
include_once("../conec/connect.php");

$title = $_POST['title'];
$description = $_POST['description'];
$id = "1";

$arquivo = $_FILES['image'];

$stmt = $conn->prepare('UPDATE about SET id =:ID, title = :TITLE, description = :DESCRIPTION, $image = :IMAGE WHERE id =:ID');

$arquivoNovo = explode('.', $arquivo['name']);
move_uploaded_file($arquivo['tmp_name'], '../images/images-cat/'.$arquivo['name']);

$image = 'images/images-cat/'.$arquivo['name'];

$stmt->bindParam(':ID', $id);
$stmt->bindParam(':TITLE', $title);
$stmt->bindParam(':DESCRIPTION', $description);
$stmt->bindParam(':IMAGE', $image);
$stmt->execute();

echo "$id $title $description $image";

?>
