<?php
$to      = Config::EMAIL_USER;
//echo $to;
$subject = 'Mensagem para Vorne store';

$message = 'Email de ' . $_GET['nome'] . "\r\n" .$_GET['mensagem'];
//echo $message;
$dest=  $_GET['email'];

$headers = "From: " .$dest ;

if(mail($to, $subject, $message, $headers)){
    echo 'deu certo';
}
?>

<script>alert('Email enviado com Sucesso!')</script>
<meta http-equiv="refresh" content="0; url=/loja">