<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'lib/vendor/autoload.php';

$mail = new PHPMailer(true);

$nome = $_POST['nome'];
$assunto = $_POST['assunto'];

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
$mail->Subject = "$assunto";
$mail->Body = "Olá, <b> $nome !</b>";
$mail->AltBody = "Olá, $nome ";

 $mail->send();
echo 'testando';
} catch (Exception $e) {
echo "testando";
}
?>