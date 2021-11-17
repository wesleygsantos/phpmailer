<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

    $dados = [
        'nome' => $_POST['nome'] ?? '',
        'pais' => strtoupper($_POST['pais']) ?? '',
        'mensagem' => $_POST['mensagem'] ?? ''
    ];

    $mail = new PHPMailer(true);

    try {

        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;

        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMPTAuth = true;
        $mail->Username ='773db00de2249a';
        $mail->Password = '3f6b74760e2b60';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->CharSet = 'UTF-8';

        // DE:
        $mail->setFrom('teste@teste.com.br','Tester Wes');

        // PARA:
        $mail->addAddress('wesleyg_santos@yahoo.com.br', 'Wesley Yahoo');

        // CONTEÚDO:
        $mail->isHTML(true);
        $mail->Subject = 'Contato via Site';

        $corpo = "<b>NOME:</b> {$dados['nome']}<br />";
        $corpo .= "<b>PAÍS:</b> {$dados['pais']}<br />";
        $corpo .= "<b>MENSAGEM:</b> {$dados['mensagem']}<br />";

        $mail->Body = $corpo;

        $mail->send();

        echo "<b>MENSAGEM ENVIADA COM SUCESSO!</b>";

    } catch(\Exception $e){
        echo $e->getMessage();
    }