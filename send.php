<?php
if($_POST){
    // $name = $_POST['form_name'];
    // $message = $_POST['msg_text'];
    // $email = $_POST['form_email'];
    // $assunto = $_POST['form_subject'];

    $name = $_POST['name'];
    $message = $_POST['message'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];

    // $name = name;
    // $message = "MENSAGEM EMAIL";
    // $email = "TESTE@GMAIL.COM";
    // $assunto = "ASSUNTO QUALQUER";

    $to = "contato@redefazerobem.com.br";
    $body = "Enviado por " . $email . "\n" . $message;

    mail ($to, $assunto, $body);

    //echo "Message sent! <a href='index.html'>Click here</a> to send another email";
}

?>