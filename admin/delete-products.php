<?php 
include_once('../config/connect.php');
//Coloque aqui a sessão

$id = $_GET['id'];


$stmt= $conn->prepare("DELETE FROM products WHERE id= :ID");
 
$stmt->bindParam(":ID", $id);
$stmt->execute();

echo "O $id foi apagado com sucesso!";
?>
<h2><a href="view-cast.php" title="voltar"></br>Click aqui pra voltar pra lista</a></h2>