<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes( $_POST['telefone'] );
    $mensagem = addslashes($_POST['mensagem']); 

    $para = "wallyksantos39@gmail.com"; // email de destino
    $assunto = "Contato de Empregos - Portifólio";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$mensagem;

    $cabeca = "From: wallyksantos39@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Ocorreu um erro ao enviar o e-mail.");
    } 

?>