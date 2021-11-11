<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

$nome = $_POST['nome'];
$motivo = $_POST['motivo'];
$email = $_POST['email'];
$comente = $_POST['comente'];

try {

$mail->CharSet = 'UTF-8';
$mail->isSMTP(); 
$mail->Host = 'smtp-vip.uni5.net'; 
$mail->SMTPAuth = true; 
$mail->Username = 'alunossenac@tido.com.br'; 
$mail->Password = 'senac21bd'; 
$mail->SMTPSecure = "TLS";
$mail->Port = 587; 
$mail->setFrom('alunossenac@tido.com.br', 'Mailer');
$mail->addAddress('alunossenac@tido.com.br', 'Tido Ferraz'); 

 $mail->isHTML(true); 
$mail->Subject = "$motivo";
$mail->Body = "Olá, <b> $nome !</b> <p> $email </p> <p> $comente </p>";
$mail->AltBody = "Olá, $nome - $email, - $comente ";

 $mail->send();
    header('Location: ../fale-comigo.php')
} catch (Exception $e) {
 header('Location: ../fale-comigo.php');
}
?>