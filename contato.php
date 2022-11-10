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

<style>

.localizacao
{
    position: absolute;
width: 551px;
height: 468px;
left: 665px;
top: 210px;
}

.whatsapp
{
    position: absolute;
width: 229px;
height: 229px;
left: 248px;
top: 460px;
}

.nossa
{
    position: absolute;
    font-size:30px;
height: 48px;
left: 925px;
top: 160px;
color: white;
}

.informacoes
{
    position: absolute;
font-size:30px;
height: 48px;
left: 224px;
top: 160px;
color: white;
}

.info
{
    position: absolute;
font-size:25px;
height: 48px;
left: 235px;
top: 253px;
color: white;

}

</style>

<?php

session_start();

if(isset($_SESSION["loggedin"]))
{
    echo    '<div class="menu">
                <img src="imagem/logo.png" id="logo" width="70px" height="70px">
                <a href="home.php?email='.urlencode($_SESSION['email']). '"><button class="botao">HOME</button></a>
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
                <a href="perfil.php"><button class="botao">PERFIL</button></a>
            </div>';
}


?>

<body>  

<div class="nossa">Nossa Localização</div>
<div class="informacoes">Informações para contato:</div>
<div class="info">Telefone: (47) 3436-4356 <br><br>Whatsapp: (47) 99678-8798 <br><br> Email: vanotech@gmail.com</div>


<div class="whatsapp">
    <a href="https://www.whatsapp.com/?lang=pt_br">
        <img src="imagem/whatsapp.png">
    </a>
</div>

    <div class="localizacao"> 
    <a href="https://www.google.com.br/maps/@-23.0720325,-52.4481016,20z?hl=pt-BR"><img src="imagem/localizacao.png"></a>
    </div>
</body>
</html>