<?php
    session_start();
    // Verifique se o usuário está logado, se não, redirecione-o para uma página de login
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: cadastro.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible">
    <title>CADASTRO</title>
    <link rel="stylesheet" href="vanotech.css" />
    <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
</head>

<style>

.Tipo
{
    text-align: center;
    font-family: 'Inter';
    font-weight: 400;
    font-size: 32px;
    color: white;
}

.Escolha
{
    text-align: center;
    width: 600px;
    height: 100px;

    font-family: 'Inter';
    border-radius: 90px;
    font-size: 20px;
    border-width: 5px;
    border-color: #5F9F9F;
}

.tempo
{
    text-align: center;
    font-family: 'Inter';
    font-weight: 400;
    font-size: 32px;
    color:white;
}

.box
{
    text-align: center;
    box-sizing: border-box;
    width: 594px;
    height: 109px;
    border-radius: 90px;
}

.resultado
{
    text-align: center;
    width: 949px;
    height: 151px;
    background: #FFFFFF;
}
</style>

<?php

echo        '<div class="menu">
                <img src="imagem/logo.png" id="logo" width="70px" height="70px">
                <a href="home.php?email='.urlencode($_SESSION['email']). '"><button class="botao">HOME</button></a>
                <a href="servicos.php?email='.urlencode($_SESSION['email']). '"><button class="botao">SERVIÇOS</button></a>
                <a href="trabalhe_conosco.php?email='.urlencode($_SESSION['email']). '"><button class="botao">TRABALHE CONOSCO</button></a>
                <a href="simulacao_de_Contrato.php?email='.urlencode($_SESSION['email']). '"><button class="botao">SIMULAÇÃO DE CONTRATO</button></a>
                <a href="contato.php?email='.urlencode($_SESSION['email']). '"><button class="botao">CONTATO</button></a>
                <a href="perfil.php?email='.urlencode($_SESSION['email']). '"><button class="botao">PERFIL</button></a>
            </div>';
?>

<body>

<form action="inserir_contrato.php" method="POST">

<br><br>
    <div class="Tipo">Tipo de serviço</div>

    <br><br>
    <select class="Escolha" name="tipo_servico">
        <option selected disabled>- Escolha o Serviço -</option>
        <option>Recursos Humanos</option>
        <option>Contabilidade</option>
        <option>Fiscal (Tax)</option>
        <option>Direito Societário</option>
        <option>Assessoria e Consultoria Empresarial</option>
    </select>

    <br><br>
    <div class="tempo">Tempo do contrato</div>

    <br><br>
    <select class="Escolha" name="duracao_contrato">
        <option selected disabled>- Escolha o Tempo de Contrato -</option>
        <option value="1">1 dia</option>
        <option value="30">1 mês</option>
        <option value="180">6 meses</option>
        <option value="365">1 ano</option>
        <option value="730">2 anos</option>
    </select>

    <br><br>
    <input type="submit" value="Contratar Serviço" class="box">
    </form>

    <br><br>
    <div class="resultado"></div>

    


    



        

</body>


</html>