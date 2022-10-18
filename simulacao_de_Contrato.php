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
    <title>SIMULAÇÃO DE CONTARTO</title>
    <link rel="stylesheet" href="vanotech.css" />
    <link href='https://fonts.googleapis.com/css?family=Volkhov' rel='stylesheet'>
</head>

<?php

//session_start();

echo        '<div class="menu">
                <img src="imagem/logo.png" id="logo" width="70px" height="70px">
                <a href="home.php?email='.urlencode($_SESSION['email']). '"><button class="botao">HOME</button></a>
                <a href="servicos.php?email='.urlencode($_SESSION['email']). '"><button class="botao">SERVIÇOS</button>
                <a href="trabalhe_conosco.php?email='.urlencode($_SESSION['email']). '"><button class="botao">TRABALHE CONOSCO</button></a>
                <button class="botao_selecionado">SIMULAÇÃO DE CONTRATO</button>
                <a href="contato.php?email='.urlencode($_SESSION['email']). '"><button class="botao">CONTATO</button></a>
                <a href="perfil.php?email='.urlencode($_SESSION['email']). '"><button class="botao">PERFIL</button></a>
            </div>';
?>

<body>
    <div>Tipo de Serviço</div>
    <select>
        <option disabled selected>- Escolha o Serviço -</option>
        <option>Recursos Humanos</option>
        <option>Contabilidade</option>
        <option>Fiscal (Tax)</option>
        <option>Direito Societário</option>
        <option>Assessoria e Consultoria Empresarial</option>
    </select>

    <select>
        <option disabled selected>- Escolha o Tempo de Contrato -</option>
        <option>1 a 6 meses</option>
        <option>1 a 2 anos</option>
        <option>1 mês</option>
    </select>

    <button>Simulação do Contrato</button>

    <table border="2">
        <tr>
            <td>Código do Contrato</td>
            <td>Contratante</td>
            <td>Serviço</td>
            <td>Tempo de Contrato</td>
            <td>Local de Encontro</td>
            <td>Profissional</td>
            <td>Preço Total</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>
</html>