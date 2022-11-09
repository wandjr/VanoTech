<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible">
    <title>HOME</title>
    <link rel="stylesheet" href="vanotech.css" />
    <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
    <script src="jquery-3.6.0.min.js"></script>
    <script src="vanotech.js"></script>
</head>

<style>
#fundo_carrossel
{
    width: 100%;
    height: 600px;
    background-color: #e1e1e1;
}
</style>

<body>

<?php

session_start();

if(isset($_SESSION["loggedin"]))
{
    echo    '<div class="menu">
                <img src="imagem/logo.png" id="logo" width="70px" height="70px">
                <button class="botao_selecionado">HOME</button>
                <a href="servicos.php?email='.urlencode($_SESSION['email']). '"><button class="botao">SERVIÇOS</button></a>
                <a href="trabalhe_conosco.php?email='.urlencode($_SESSION['email']). '"><button class="botao">TRABALHE CONOSCO</button></a>
                <a href="simulacao_de_Contrato.php?email='.urlencode($_SESSION['email']). '"><button class="botao">SIMULAÇÃO DE CONTRATO</button></a>
                <a href="contato.php?email='.urlencode($_SESSION['email']). '"><button class="botao">CONTATO</button></a>
                <a href="perfil.php?email='.urlencode($_SESSION['email']). '"><button class="botao">PERFIL</button></a>
            </div>';
}else{
    echo    '<div class="menu">
                <img src="imagem/logo.png" id="logo" width="70px" height="70px">
                <button class="botao_selecionado">HOME</button>
                <a href="servicos.php"><button class="botao">SERVIÇOS</button></a>
                <a href="trabalhe_conosco.php"><button class="botao">TRABALHE CONOSCO</button></a>
                <a href="simulacao_de_Contrato.php"><button class="botao">SIMULAÇÃO DE CONTRATO</button></a>
                <a href="contato.php"><button class="botao">CONTATO</button></a>
                <a href="perfil.php"> <button class="botao">PERFIL</button></a>
            </div>';
}


?>

    <div id="fundo_carrossel">
        <div id="carrossel">
            <img src="imagem/recursos_humanos.jpg" id="carrossel1" width="100%" height="540px">
            <img src="imagem/contabilidade.png" id="carrossel2" width="100%" height="540px">
            <img src="imagem/fiscal.jpg" id="carrossel3" width="100%" height="540px">
            <img src="imagem/direito_societario.jpg" id="carrossel4" width="100%" height="540px">
            <img src="imagem/assessoria.jpg" id="carrossel5" width="100%" height="540px">
        </div>
    </div>  

    <div class="titulo">Bem Vindo a VanoTech</div>

    <div class="conteudo">
        <div class="texto">
            <p class="paragrafos">
                Uma das melhores empresas em sua área tendo várias empresas que usam nossos serviços, somos especialistas na área de contabilidade e já contratamos mas de centenas de especialistas para trabalhar em nossa empresa. Então não perca tempo e faça seu registro e conmeçe a trabalhar conosco ou contrate um de nossos serviços.
            </p>
        </div>
    </div>

<br><br><br><br>    
</body>

<script>

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides;

  for (i = 1; i < 6; i++) {
    $("#carrossel"+i).hide();
  }
  slideIndex++;
  if (slideIndex > 5) {slideIndex = 1}    

  $("#carrossel"+slideIndex).show(4000);  

  setTimeout(showSlides, 6000); // Change image every 2 seconds
}
</script>

</html>