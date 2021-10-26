<?php


include('../config/connect.php');
    session_start();
        $login = $_POST['login'];
        $senha = $_POST['password'];
        $stmt = $conn->prepare("SELECT * FROM users WHERE login = :LOGIN AND password = :PASSWORD");
        $stmt->bindParam(":LOGIN", $login);
        $stmt->bindParam(":PASSWORD", $password);
        $stmt->execute();



?>