<?php
include_once('../config/connect.php');
header('Location: view.php');
   $stmt = $conn->prepare("INSERT INTO users (id, name, login, password) VALUES(:ID, :NAME, :LOGIN, :PASSWORD)");

   $id = $_POST['id'];
   $name = $_POST['name'];
   $login = $_POST['login'];
   $password = $_POST['password'];

   $stmt->bindParam(":ID", $id);
   $stmt->bindParam(":NAME", $name);
   $stmt->bindParam(":LOGIN", $login);
   $stmt->bindParam(":PASSWORD", $password);
   $stmt->execute();

?>