<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#E0DFE0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" type="image/x-icon" href="./assets/Logo-Icon.png" />
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="./splide-3.6.12/dist/css/splide.min.css">

    <script type="text/javascript" src="splide-3.6.12/dist/js/splide.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Arby | Construtora e Incorporadora</title>
</head>
<body>
    
    <?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['mesage']);

$to = "contato@arbyconstrutora.com.br";
$subject = "Email enviado do site";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagem;
$header = "From:arby@arbyconstrutora.com.br"."\r\n".
            "Repley-To:".$email."\e\n".
            "X=Mailer:PHP/".phpversion();

if (mail($to,$subject,$body,$header)){
    $text = "O email enviado com sucesso";
    $siteURL= "index.html";
    header("refresh:3;url={$siteURL}");
    
    
}
    else{
    echo("O email não foi enviado");
}

}

?>
    <section class="relative py-24 md:py-44 lg:py-64 bg-white"
style="background-image: url('flex-ui-assets/elements/pattern-white.svg'); background-position: center;">
<div class="relative z-10 container px-4 mx-auto">
    <div class="max-w-4xl mx-auto text-center">
        <span
            class="inline-block py-px px-5 mb-4 text-5xs leading-5 text-gray-500 bg-gray-100 font-medium rounded-full shadow-sm">Seu email foi enviado!
            </span>
        <h2 class="mb-4 text-4xl md:text-5xl leading-tight font-bold tracking-tighter italic"><?php $text?></h2>
    </div>
</div>
</section>
</body>
</html>




