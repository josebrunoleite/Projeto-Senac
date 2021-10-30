<?php
include_once('../config/connect.php');

   $name = $_POST['nome'];
   $login = $_POST['login'];
   $password = md5($_POST['password']);

   $stmt = $conn->prepare("INSERT INTO users (name, login, password) VALUES(:NAME, :LOGIN, :PASSWORD)");

   $stmt->bindParam(":NAME", $name);
   $stmt->bindParam(":LOGIN", $login);
   $stmt->bindParam(":PASSWORD", $password);
   $stmt->execute();

?>