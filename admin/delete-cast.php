<?php 
include_once('../config/connect.php');
include('')//Coloque aqui a sessão

$id = $_POST['id'];
$nome = $_POST['nome']
$cat = $_POST['cat'];

$stmt-> $conn= prepare("DELETE FROM products WHERE id= :ID AND category = :CAT");
 
$stmt->bindParam(":ID", $id);
$stmt->bindParam(":CAT", $cat);
$stmt->execute();

echo "O $nome foi apagado com sucesso!";
