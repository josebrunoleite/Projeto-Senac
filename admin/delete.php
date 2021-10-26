<?php
include_once('../config/connect.php');
$stmt = $conn->prepare("DELETE FROM users WHERE id = :ID");
$id = $_GET['id'];
$stmt->bindParam(":ID", $id);
$stmt->execute();

echo "Registro apagado";
?>
