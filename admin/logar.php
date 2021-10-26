<?php


include('../config/connect.php');
    session_start();
        $login = $_POST['login'];
        $senha = $_POST['password'];
        $stmt = $conn->prepare("SELECT * FROM users WHERE login = :LOGIN AND password = :PASSWORD");
        $stmt->bindParam(":LOGIN", $login);
        $stmt->bindParam(":PASSWORD", $password);
        $stmt->execute();

        if($stmt->rowCount() == 1){
            $info = $stmt->fetch();
            $_SESSION['logado'] = true;
            $_SESSION['id'] = $info['id'];
            $_SESSION['nome'] = $info['nome'];
            $_SESSION['login'] = $info['login'];
            $_SESSION['senha'] = $info['senha'];
                
            header("Location: main.php");
        }else{
            echo 'Usuário não cadastrado.';
        }



?>
