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
    <title>TRABALHE CONOSCO</title>
    <link rel="stylesheet" href="vanotech.css" />
    <link href='https://fonts.googleapis.com/css?family=Volkhov' rel='stylesheet'>
</head>

<?php

session_start();

    echo    '<div class="menu">
                <img src="imagem/logo.png" id="logo" width="70px" height="70px">
                <a href="home.php?email='.urlencode($_SESSION['email']). '"><button class="botao">HOME</button></a>
                <a href="servicos.php?email='.urlencode($_SESSION['email']). '"><button class="botao">SERVIÇOS</button>
                <button class="botao_selecionado">TRABALHE CONOSCO</button>
                <a href="simulacao_de_Contrato.php?email='.urlencode($_SESSION['email']). '"><button class="botao">SIMULAÇÃO DE CONTRATO</button></a>
                <a href="contato.php?email='.urlencode($_SESSION['email']). '"><button class="botao">CONTATO</button></a>
                <a href="perfil.php?email='.urlencode($_SESSION['email']). '"><button class="botao">PERFIL</button></a>
            </div>';
?>

<body>

    <select>
        <option>Recursos Humanos</option>
        <option>Contabilidade</option>
        <option>Fiscal (Tax)</option>
        <option>Direito Societário</option>
        <option>Assessoria e Consultoria Empresarial</option>
    </select>

    <input type="text" placeholder="Conhecimento em Informática">
    
    <select>
        <option disabled selected>Estado</option>
        <option>RS</option>
        <option>SC</option>
        <option>PR</option>
        <option>SP</option>
        <option>ES</option>
        <option>RJ</option>
        <option>MG</option>
        <option>MS</option>
        <option>MT</option>
        <option>GO</option>
        <option>DF</option>
        <option>RO</option>
        <option>TO</option>
        <option>BA</option>
        <option>AL</option>
        <option>PE</option>
        <option>PA</option>
        <option>RN</option>
        <option>CE</option>
        <option>PI</option>
        <option>MA</option>
        <option>PA</option>
        <option>AP</option>
        <option>AM</option>
        <option>RR</option>
        <option>AC</option>
    </select>

    <input type="text" placeholder="Experiência Profissional">

    <input type="text" placeholder="Escolaridade">

    <input type="text" placeholder="Comentários Adicionais">

    <input type="text" placeholder="Formação Profissionalizante">

    <button>Enviar</button>
</body>
</html>