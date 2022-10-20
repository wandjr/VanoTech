<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible">
    <title>SERVIÇOS</title>
    <link rel="stylesheet" href="vanotech.css" />
    <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
</head>

<?php

session_start();

if(isset($_SESSION["loggedin"]))
{
    echo    '<div class="menu">
                <img src="imagem/logo.png" id="logo" width="70px" height="70px">
                <a href="home.php?email='.urlencode($_SESSION['email']). '"><button class="botao">HOME</button></a>
                <button class="botao_selecionado">SERVIÇOS</button>
                <a href="trabalhe_conosco.php?email='.urlencode($_SESSION['email']). '"><button class="botao">TRABALHE CONOSCO</button></a>
                <a href="simulacao_de_Contrato.php?email='.urlencode($_SESSION['email']). '"><button class="botao">SIMULAÇÃO DE CONTRATO</button></a>
                <a href="simulacao_de_Contrato.php?email='.urlencode($_SESSION['email']). '"><button class="botao">CONTATO</button></a>
                <a href="perfil.php?email='.urlencode($_SESSION['email']). '"><button class="botao">PERFIL</button></a>
            </div>';
}else{
    echo    '<div class="menu">
                <img src="imagem/logo.png" id="logo" width="70px" height="70px">
                <a href="home.php"><button class="botao">HOME</button></a>
                <button class="botao_selecionado">SERVIÇOS</button>
                <a href="trabalhe_conosco.php"><button class="botao">TRABALHE CONOSCO</button></a>
                <a href="simulacao_de_Contrato.php"><button class="botao">SIMULAÇÃO DE CONTRATO</button></a>
                <a href="contato.php"><button class="botao">CONTATO</button></a>
                <a href="perfil.php"> <button class="botao">PERFIL</button></a>
            </div>';
}


?>

<body>

    <div class="titulo">Serviços</div>

    <div class="conteudo">
        <div class="texto">
            <p id="paragrafos_servico">
                A VanoTech possui muitas ferramentas para o auxilio de sua empresa ou sua pessoa.
            </p>
        </div>
    </div>

    <div class="servicos">
        <div class="titulo_imagem">        
            <div class="titulo_recursos">Recursos Humanos</div>
            <img src="imagem/img2.png">
        </div>
        <p class="paragrafos1">
            A área de Recursos Humanos é a junção de colaboradores de uma determinada empresa. A base do segmento
            responsável são as ações de seleção, recrutamento, treinamento, remuneração e fornecimento de vantagens aos
            trabalhadores.
        </p>
    </div>

    <div class="servicos">
        <div class="titulo_imagem">        
            <div class="titulo_recursos">Contabilidade</div>
            <img src="imagem/img3.png">
        </div>
        <p class="paragrafos1">
            Contabilidade é a ciência que estuda e pratica as funções de orientação, controle e registro relativo aos atos
            e fatos da administração econômica segundo o Congresso Brasileiro de Contabilidade.
        </p>
    </div>

    <div class="servicos">
        <div class="titulo_imagem">        
            <div class="titulo_recursos">Fiscal (Tax)</div>
            <img src="imagem/img4.png">
        </div>
        <p class="paragrafos1">
            Acompanha as alterações nas legislações fiscais e tributária no âmbito Federal, Estadual e Municipal, realiza o
            calculo de tributos, preenche e envia as obrigações acessórias.
        </p>
    </div>

    <div class="servicos">
        <div class="titulo_imagem">        
            <div class="titulo_recursos">Direito Societário</div>
            <img src="imagem/img5.png">
        </div>
        <p class="paragrafos1">
            O Direito Societário compreende o estudo das sociedades, regras sobre a constituição e dissolução destas
            sociedades, bem como os aspectos de relacionamentos entre elas e seus sócios e acionistas com às suas diversas
            peculiaridades, como alterações de controle e de participação, direito de retirada etc.
        </p>
    </div>

    <div class="servicos">
        <div class="titulo_imagem">        
            <div class="titulo_recursos">Assessoria e Consultoria Empresarial</div>
            <br>
            <img src="imagem/img6.png">
        </div>
        <p class="paragrafos1">
            É uma prática empresarial que visa buscar o auxílio de profissionais externos à empresa para que ajudem a
            organização a identificar fraquezas e definir planos de ação para superá-las e levar o negócio a atingir seus
            objetivos estratégicos.
        </p>
    </div>

    <a href="contratar_servico.php">
        <button class="botao_contrato">
            Contratar Serviço
        </button>
    </a>

    <br><br><br><br>
</body>

</html>