<?php
include('../config/connect.php');
session_start();
$login = $_POST['login'];
$senha = md5($_POST['senha']);

$stmt=$conn->prepare("SELECT * FROM users WHERE login = :LOGIN AND senha = :SENHA");

$stmt->bindValue(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senha);
$stmt->execute();

if($stmt->rowCount()==1){
    $info = $stmt->fetch();
    // var_dump($info);
    $_SESSION['logado'] = true;
    $_SESSION['nome'] = $info['name'];
    $_SESSION['login'] = $info['login'];
    $_SESSION['senha'] = $info['senha'];

    header("Location:view-cast.php");
}else{
    echo "Usario não encontrado";
}
?>
