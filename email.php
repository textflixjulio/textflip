<?php

    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $assunto = addslashes($_POST['assunto']);

    $para = "shieldratech@gmail.com";
    $subject = "Contato - Shieldra";

    $body = "Nome: " .$nome."\r\n"."E-mail: " . $email."\r\n"."Assunto: " .$assunto;

    $headers = "From: shieldratech@gmail.com"."\r\n"."Reply-To: ".$email."\r\n"."X=Mailer:PHP/".phpversion();

    if (mail($para, $subject, $body, $headers)) {
        echo("Email enviado com sucesso!");
    } else {
        echo("O Email não pode ser enviado!");
    }

?>
