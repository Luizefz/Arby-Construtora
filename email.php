<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addcslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$mensagem = addcslashes($_POST['mesage']);

$to = "arby@arbyconstrutora.com.br";
$subject = "Email site - contado";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagem;
$header = "From:arbyemail@arbyindustria.com.br"."\r\n".
            "Repley-To:".$email."\e\n".
            "X=Mailer:PHP/".phpversion();

if (mail($to,$subject,$body,$header)){

    echo("Email enviado com sucesso");
}
    else{
    echo("O email não foi enviado");
}

}

?>