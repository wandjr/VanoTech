<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible">
    <title>CONTATO</title>
    <link rel="stylesheet" href="vanotech.css" />
    <link href='https://fonts.googleapis.com/css?family=Volkhov' rel='stylesheet'>
</head>

<?php

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
{
    echo    '<div class="menu">
                <img src="imagem/logo.png" id="logo" width="70px" height="70px">
                <a href="home.php?email='.urlencode($_SESSION['email']). '"><button class="botao_selecionado">HOME</button></a>
                <a href="servicos.php?email='.urlencode($_SESSION['email']). '"><button class="botao">SERVIÇOS</button></a>
                <a href="trabalhe_conosco.php?email='.urlencode($_SESSION['email']). '"><button class="botao">TRABALHE CONOSCO</button></a>
                <a href="simulacao_de_Contrato.php?email='.urlencode($_SESSION['email']). '"><button class="botao">SIMULAÇÃO DE CONTRATO</button></a>
                <button class="botao_selecionado">CONTATO</button>
                <a href="perfil.php?email='.urlencode($_SESSION['email']). '"><button class="botao">PERFIL</button></a>
            </div>';
}else{
    echo    '<div class="menu">
                <img src="imagem/logo.png" id="logo" width="70px" height="70px">
                <a href="home.php"><button class="botao">HOME</button></a>
                <a href="servicos.php"><button class="botao">SERVIÇOS</button></a>
                <a href="trabalhe_conosco.php"><button class="botao">TRABALHE CONOSCO</button></a>
                <a href="simulacao_de_Contrato.php"><button class="botao">SIMULAÇÃO DE CONTRATO</button></a>
                <button class="botao_selecionado">CONTATO</button>
                <a href="perfil.php"> <button class="botao">PERFIL</button></a>
            </div>';
}


?>

<body>  

    <div>Informações para Contato</div>

    <div>Telefone</div>
    <div>(47) 998827777</div>

    <div>WhatsApp</div>
    <div>(47) 90904442</div>

    <div>E-mail</div>
    <div>vanotech@gmail.com</div>
    <a href="https://www.whatsapp.com/?lang=pt_br">
        <img src="imagem/whatsapp.png">
    </a>

    <div>Nossa Localização</div>
    <a href="https://www.google.com.br/maps/@-23.0720325,-52.4481016,20z?hl=pt-BR"><img src="imagem/localizacao.png"></a>
    <div>Rua: Pedro Jorge - Bairro: Souza - Numero: 456</div>
    <div>Cep: 89457-028</div>
</body>
</html>